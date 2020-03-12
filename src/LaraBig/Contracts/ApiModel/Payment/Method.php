<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Payment;

use GuzzleHttp\Exception\GuzzleException;

interface Method
{
    const PREFIX = "methods";
    const VERSION = "";

    /**
     * Returns a list of accepted payment methods based on the order_id.
     * GET /payments/methods
     * @see https://developer.bigcommerce.com/api-reference/store-management/payment-methods/payment-methods/paymentsmethodsget
     * @throws GuzzleException
     * @return mixed
     */
    public function getAccepted();
}
