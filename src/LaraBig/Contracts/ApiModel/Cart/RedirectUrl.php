<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Cart;


use GuzzleHttp\Exception\GuzzleException;

interface RedirectUrl
{
    const PREFIX = "redirect_urls";
    const VERSION = "v3";

    /**
     * Creates a Cart redirect URL for redirecting a shopper to an already created cart using the cartId.
     * POST /carts/{cartId}/redirect_urls
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-cart-api/cart-redirect-urls/createcartredirecturl
     * @throws GuzzleException
     * @param $cartId
     * @param $data
     * @return mixed
     */
    public function create($cartId, $data);
}
