<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\StorefrontCheckout;

use GuzzleHttp\Exception\GuzzleException;

interface BillingAddress
{
    const PREFIX = "billing-address/{addressId}";
    const VERSION = "v3";

    /**
     * Adds a billing address to an existing Checkout.
     * POST /checkouts/{checkoutId}/billing-address
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/storefront-checkout-api/checkout-billing-address/checkoutsbillingaddressbycheckoutidpost
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function add($data);

    /**
     * Updates an existing billing address on Checkout.
     * PUT /checkouts/{checkoutId}/billing-address/{addressId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/storefront-checkout-api/checkout-billing-address/checkoutsbillingaddressbycheckoutidandaddressidput
     * @throws GuzzleException
     * @param $addressId
     * @param $data
     * @return mixed
     */
    public function  update($addressId, $data);
}
