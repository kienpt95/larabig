<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;

interface StorefrontCard
{
    const PREFIX = "carts";
    const VERSION = 'v3';

    /**
     * Returns a Cart.
     * GET /carts
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/storefront-cart-api/cart/getacart
     * @throws GuzzleException
     * @return mixed
     */
    public function get();

    /**
     * Creates a Cart.
     * POST /carts
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/storefront-cart-api/cart/createacart
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Deletes a Cart. Once a Cart has been deleted it can not be recovered.
     * DELETE /carts/{cartId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/storefront-cart-api/cart/deleteacart
     * @throws GuzzleException
     * @param $cartId
     * @return mixed
     */
    public function delete($cartId);
}
