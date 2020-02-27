<?php

namespace Smartosc\LaraBig;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog;
use Smartosc\LaraBig\Contracts\BackendModel\StoreInterface;
use InvalidArgumentException;

/**
 * Class LaraBig
 * @package Smartosc\LaraBig
 * @property Catalog catalog
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
