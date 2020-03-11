<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Cart;


use GuzzleHttp\Exception\GuzzleException;

interface Item
{
    const PREFIX = "items";
    const VERSION = "v3";

    /**
     * Adds a line items to the Cart
     * POST /carts/{cartId}/items
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-cart-api/cart-items/addcartlineitem
     * @throws GuzzleException
     * @param $cartId
     * @param $data
     * @return mixed
     */
    public function add($cartId, $data);

    /**
     * Updates a Cart line item. Updates an existing, single line item in the cart.
     * PUT /carts/{cartId}/items/{itemId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-cart-api/cart-items/updatecartlineitem
     * @throws GuzzleException
     * @param $cartId
     * @param $itemId
     * @param $data
     * @return mixed
     */
    public function  update($cartId, $itemId, $data);

    /**
     * Deletes a Cart line item.
     * DELETE /carts/{cartId}/items/{itemId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-cart-api/cart-items/deletecartlineitem
     * @throws GuzzleException
     * @param $cartId
     * @param $itemId
     * @return mixed
     */
    public function DELETE($cartId, $itemId);
}
