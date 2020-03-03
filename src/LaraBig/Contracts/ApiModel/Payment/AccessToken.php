<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Payment;


interface AccessToken
{
    const PREFIX = "access_tokens";
    const VERSION = "";

    /**
     * This endpoint provides the capability to create a payment access token. The payment access token is required when making request to Payment API for submitting payment for an order.
     * After the token is created then use the token to Process Payments.
     * POST /payments/access_tokens
     * @see https://developer.bigcommerce.com/api-reference/store-management/payment-methods/payment-access-token/paymentsaccesstokenspost
     * @param $data
     * @return mixed
     */
    public function create($data);
}