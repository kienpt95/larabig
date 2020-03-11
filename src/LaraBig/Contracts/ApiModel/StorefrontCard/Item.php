<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\StorefrontCard;


use GuzzleHttp\Exception\GuzzleException;

interface Item
{
    const PREFIX = "items";
    const VERSION = "v3";

    /**
     * Adds a line items to the Cart.
     * POST /carts/{cartId}/items
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/storefront-cart-api/cart-items/addcartlineitem
     * @throws GuzzleException
     * @param $cartId
     * @param $data
     * @return mixed
     */
    public function add($cartId, $data);

    /**
     * Updates a Cart line item. Updates an existing, single line item in the cart.
     * POST /carts/{cartId}/items/{itemId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/storefront-cart-api/cart-items/updatecartlineitem
     * @throws GuzzleException
     * @param $cartId
     * @param $data
     * @param $itemId
     * @return mixed
     */
    public function update($cartId, $data, $itemId);

    /**
     * Deletes a Cart line item.
     * DELETE /carts/{cartId}/items/{itemId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/storefront-cart-api/cart-items/deletecartlineitem
     * @throws GuzzleException
     * @param $cartdId
     * @param $itemId
     * @return mixed
     */
    public function delete($cartdId, $itemId);
}
