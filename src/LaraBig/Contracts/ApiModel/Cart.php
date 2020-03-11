<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;

interface Cart
{
    const PREFIX = "carts";
    const VERSION = "v3";

    /**
     * Returns a stores Cart.
     * GET /carts/{cartId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-cart-api/cart/getacart
     * @throws GuzzleException
     * @param $cardId
     * @return mixed
     */
    public function get($cardId);

    /**
     * Creates a Cart.
     * POST /carts
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-cart-api/cart/createacart
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Carts
     * PUT /carts/{cartId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-cart-api/cart/updateacart
     * @throws GuzzleException
     * @param $cartId
     * @param $data
     * @return mixed
     */
    public function update($cartId, $data);

    /**
     * DELETE a Carts
     * DELETE /carts/{cartId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-cart-api/cart/deleteacart
     * @throws GuzzleException
     * @param $cartId
     * @return mixed
     */
    public function delete($cartId);
}
