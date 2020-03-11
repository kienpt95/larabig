<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\StorefrontCheckout\CartItem;


use GuzzleHttp\Exception\GuzzleException;

interface Item
{
    /**
     * Updates a Cart line item. Updates an existing, single line item in the cart.
     * PUT /checkouts/{checkoutId}/carts/{cartId}/items/{itemId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/storefront-checkout-api/checkout-cart-items/checkoutscartsitemsitemidbycheckoutidandcartidput
     * @throws GuzzleException
     * @param $checkoutId
     * @param $cartId
     * @param $data
     * @param $itemId
     * @return mixed
     */
    public function update($checkoutId, $cartId, $itemId, $data);

    /**
     * Deletes a Cart line item.
     * DELETE /checkouts/{checkoutId}/carts/{cartId}/items/{itemId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/storefront-checkout-api/checkout-cart-items/checkoutscartsitemsitemidbycheckoutidandcartiddelete
     * @throws GuzzleException
     * @param $checkoutId
     * @param $cartdId
     * @param $itemId
     * @return mixed
     */
    public function delete($checkoutId, $cartdId, $itemId);
}
