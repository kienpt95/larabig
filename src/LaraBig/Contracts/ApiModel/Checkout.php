<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Checkout\BillingAddress;
use Smartosc\LaraBig\Contracts\ApiModel\Checkout\Consignment;
use Smartosc\LaraBig\Contracts\ApiModel\Checkout\Coupon;
use Smartosc\LaraBig\Contracts\ApiModel\Checkout\Order;

/**
 * Interface Checkout
 * @package Smartosc\LaraBig\Contracts\ApiModel
 * @property BillingAddress billing_address
 * @property Consignment consignment
 * @property Coupon coupon
 * @property Order order
 */
interface Checkout
{
    const PREFIX = "checkouts";
    const VERSION = "v3";

    /**
     * Returns a Checkout.
     * GET/checkouts/{checkoutId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-checkout-api/checkout/checkoutsbycheckoutidget
     * @throws GuzzleException
     * @param $checkout_id
     * @return mixed
     */
    public function get($checkout_id);
}
