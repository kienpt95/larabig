<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Payment;


interface Method
{
    const PREFIX = "methods";
    const VERSION = "";

    /**
     * Returns a list of accepted payment methods based on the order_id.
     * GET /payments/methods
     * @see https://developer.bigcommerce.com/api-reference/store-management/payment-methods/payment-methods/paymentsmethodsget
     * @return mixed
     */
    public function getAccepted($order_id);
}