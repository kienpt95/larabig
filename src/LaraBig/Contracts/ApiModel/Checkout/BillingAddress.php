<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Checkout;


use GuzzleHttp\Exception\GuzzleException;

interface BillingAddress
{
    const PREFIX = "billing-address";
    const VERSION = "v3";

    /**
     * Adds a billing address to an existing Checkout.
     * POST /checkouts/{checkoutId}/billing-address
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-checkout-api/checkout-billing-address/checkoutsbillingaddressbycheckoutidpost
     * @throws GuzzleException
     * @param $checkoutId
     * @param $data
     * @return mixed
     */
    public function add($checkoutId, $data);

    /**
     * Updates an existing billing address on Checkout.
     * PUT /checkouts/{checkoutId}/billing-address/{addressId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-checkout-api/checkout-billing-address/checkoutsbillingaddressbycheckoutidandaddressidput
     * @throws GuzzleException
     * @param $checkoutId
     * @param $addressId
     * @param $data
     * @return mixed
     */
    public function update($checkoutId, $addressId,  $data);
}
