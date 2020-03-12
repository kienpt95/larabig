<?php

namespace Smartosc\LaraBig;

use Smartosc\LaraBig\Contracts\ApiModel\AbandonedCart;
use Smartosc\LaraBig\Contracts\ApiModel\Banner;
use Smartosc\LaraBig\Contracts\ApiModel\Cart;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog;
use Smartosc\LaraBig\Contracts\ApiModel\Channel;
use Smartosc\LaraBig\Contracts\ApiModel\Checkout;
use Smartosc\LaraBig\Contracts\ApiModel\Content;
use Smartosc\LaraBig\Contracts\ApiModel\Country;
use Smartosc\LaraBig\Contracts\ApiModel\Coupon;
use Smartosc\LaraBig\Contracts\ApiModel\Currency;
use Smartosc\LaraBig\Contracts\ApiModel\Customer;
use Smartosc\LaraBig\Contracts\ApiModel\CustomerGroup;
use Smartosc\LaraBig\Contracts\ApiModel\GiftCertificate;
use Smartosc\LaraBig\Contracts\ApiModel\Order;
use Smartosc\LaraBig\Contracts\ApiModel\OrderStatus;
use Smartosc\LaraBig\Contracts\ApiModel\Payment;
use Smartosc\LaraBig\Contracts\ApiModel\PriceList;
use Smartosc\LaraBig\Contracts\ApiModel\Shipping;
use Smartosc\LaraBig\Contracts\ApiModel\Site;
use Smartosc\LaraBig\Contracts\ApiModel\Theme;
use Smartosc\LaraBig\Contracts\ApiModel\TimeZone;
use Smartosc\LaraBig\Contracts\ApiModel\Webhook;
use Smartosc\LaraBig\Contracts\ApiModel\Wishlist;
use Smartosc\LaraBig\Contracts\BackendModel\StoreInterface;
use InvalidArgumentException;

/**
 * Class LaraBig
 * @package Smartosc\LaraBig
 * @property AbandonedCart abandoned_cart
 * @property Banner banner
 * @property Cart cart
 * @property Catalog catalog
 * @property Channel channel
 * @property Checkout checkout
 * @property Content content
 * @property Country country
 * @property Coupon coupon
 * @property Currency currency
 * @property Customer customer
 * @property CustomerGroup customer_group
 * @property GiftCertificate gift_certificate
 * @property Order order
 * @property OrderStatus order_status
 * @property Payment payment
 * @property PriceList pricelist
 * @property Shipping shipping
 * @property Site site
 * @property Theme theme
 * @property TimeZone timezone
 * @property Webhook webhook
 * @property Wishlist wishlist
 */
class LaraBig
{
    private static $allowMethods = ['POST', 'PUT', 'PATCH', 'GET', 'DELETE', 'HEAD'];


    /**
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    /**
     * @var StoreInterface
     */
    private $store;

    /**
     * AbstractClient constructor.
     */
    public function __construct()
    {
        $this->httpClient = app('httpClient');
    }

    /**
     * @return StoreInterface
     */
    public function getStore(): StoreInterface
    {
        return $this->store;
    }

    /**
     * @param StoreInterface $store
     * @return LaraBig
     */
    public function setStore(StoreInterface $store) : LaraBig
    {
        $this->store = $store;
        return $this;
    }

    /**
     * @param string $method
     * @param string $resource
     * @param mixed|null $data
     * @param mixed|null $parameters
     * @throws \GuzzleHttp\Exception\GuzzleException
     * @throws InvalidArgumentException
     * @return mixed
     */
    public function call($method, $resource, $data = null, $parameters = null)
    {
        if (!in_array($method, self::$allowMethods)) {
            throw new InvalidArgumentException('Method\'s not valid');
        }

        $options = [
            'headers' => [
                'X-Auth-Client' => config('larabig.client_id'),
                'X-Auth-Token'  => $this->getStore()->getAccessToken(),
                'Content-Type'  => 'application/json',
            ],
            'json' => $data,
            'query' => $parameters
        ];
        $response = $this->httpClient->request(
            $method,
            $this->uriBuilder($resource, $method),
            $options
        );

        return json_decode($response->getBody());
    }

    /**
     * @param string $resource
     * @param string $method
     * @return string
     */
    public function uriBuilder($resource, $method)
    {
        $uri = config('larabig.api_url') . '/stores/'  . $this->getStore()->getStoreHash() . '/' . $resource;

        if (($method == 'GET') && strpos($resource, 'v2') !== false) {
            $uri .= '.json';
        }
        return $uri;
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->{$name};
        }
        $namespace = str_replace("_", "", ucwords($name, "_"));
        $className = 'Smartosc\LaraBig\Contracts\ApiModel\\' . $namespace;
        $this->{$name} = resolve($className, ['larabig' => $this]);
        return $this->{$name};
    }
}
