<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Cart\Item;
use Smartosc\LaraBig\Contracts\ApiModel\Cart\RedirectUrl;

/**
 * Interface Cart
 * @package Smartosc\LaraBig\Contracts\ApiModel
 * @property Item item
 * @property RedirectUrl redirect_url
 */
interface Cart
{
    const PREFIX = "carts";
    const VERSION = "v3";

    /**
     * Returns a stores Cart.
     * GET /carts/{cart_id}
     * @example $cart_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-cart-api/cart/getacart
     * @throws GuzzleException
     * @param $cart_id
     * @return mixed
     */
    public function get($cart_id);

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
     * PUT /carts/{cart_id}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-cart-api/cart/updateacart
     * @throws GuzzleException
     * @param $cart_id
     * @param $data
     * @return mixed
     */
    public function update($cart_id, $data);

    /**
     * DELETE a Carts
     * DELETE /carts/{cart_id}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-cart-api/cart/deleteacart
     * @throws GuzzleException
     * @param $cart_id
     * @return mixed
     */
    public function delete($cart_id);
}
