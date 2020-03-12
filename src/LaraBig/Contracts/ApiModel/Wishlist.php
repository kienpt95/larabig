<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;

interface Wishlist
{
    const PREFIX = "wishlists";
    const VERSION = "v3";

    /**
     * Returns a list of Wishlists. Optional filter parameters can be passed in.
     * GET /wishlists
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/wishlists/wishlists/wishlistsget
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Returns a single Wishlist.
     * GET/wishlists/{wishlist_id}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/wishlists/wishlists/wishlistsbyidget
     * @throws GuzzleException
     * @param $wishlist_id
     * @return mixed
     */
    public function get($wishlist_id);

    /**
     * Creates a Wishlist and Wishlist Item. More than one item can be added in the POST.
     * POST /wishlists
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/wishlists/wishlists/wishlistspost
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Wishlist.
     * PUT /wishlists/{wishlist_id}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/wishlists/wishlists/wishlistsbyidput
     * @throws GuzzleException
     * @param $wishlist_id
     * @param $data
     * @return mixed
     */
    public function update($wishlist_id, $data);

    /**
     * Deletes a Wishlist.
     * DELETE /wishlists/{wishlist_id}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/wishlists/wishlists/wishlistsbyiddelete
     * @throws GuzzleException
     * @param $wishlist_id
     * @return mixed
     */
    public function delete($wishlist_id);


}
