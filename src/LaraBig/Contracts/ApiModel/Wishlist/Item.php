<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Wishlist;


use GuzzleHttp\Exception\GuzzleException;

interface Item
{
    const PREFIX = "items";
    const VERSION = "v3";

    /**
     * Adds a Wishlist Item. More than one item can be added at a time.
     * POST /wishlists/{wishlist_id}/items
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/wishlists/wishlists/wishlistsitemsbyidpost
     * @throws GuzzleException
     * @param $wishlist_id
     * @param $data
     * @return mixed
     */
    public function add($wishlist_id, $data);
    /**
     * Deletes a Wishlist Item.
     * DELETE /wishlists/{wishlist_id}/items/{item_id}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/wishlists/wishlists/wishlistsitemsbyiddelete
     * @throws GuzzleException
     * @param $wishlist_id
     * @param $item_id
     * @return mixed
     */
    public function delete($wishlist_id, $item_id);
}
