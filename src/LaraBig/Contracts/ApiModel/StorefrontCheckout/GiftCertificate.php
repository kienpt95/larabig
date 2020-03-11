<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\StorefrontCheckout;


use GuzzleHttp\Exception\GuzzleException;

interface GiftCertificate
{
    const PREFIX = "gift-certificates";
    const VERSION = "v3";

    /**
     * Adds a Gift Certificate Code to Checkout.
     * POST /checkouts/{checkoutId}/gift-certificates
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/storefront-checkout-api/checkout-gift-certificates/checkoutsgiftcertificatesbycheckoutidpost
     * @throws GuzzleException
     * @param $checkoutId
     * @param $data
     * @return mixed
     */
    public function add($checkoutId, $data);

    /**
     * Deletes an existing Gift Certificate.
     * DELETE /checkouts/{checkoutId}/gift-certificates/{giftCertificateCode}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/storefront-checkout-api/checkout-gift-certificates/checkoutsgiftcertificatesbycheckoutidandgiftcertificatecodedelete
     * @throws GuzzleException
     * @param $checkoutId
     * @param $giftCertificateCode
     * @return mixed
     */
    public function delete($checkoutId, $giftCertificateCode);
}
