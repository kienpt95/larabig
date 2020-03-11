<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Channel;


use GuzzleHttp\Exception\GuzzleException;

interface Listing
{
    const PREFIX = "listings";
    const VERSION = "v3";

    /**
     * Returns a list of all Channel Listings for a particular channel
     * GET /channels/{channel_id}/listings
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api/channel-listings/listchannellistings
     * @throws GuzzleException
     * @param $channel_id
     * @return mixed
     */
    public function all($channel_id);

    /**
     * Get a Channel Listing
     * GET /channels/{channel_id}/listings/{listing_id}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api/channel-listings/getchannellisting
     * @throws GuzzleException
     * @param $channel_id
     * @param $listing_id
     * @return mixed
     */
    public function  get($channel_id, $listing_id);

    /**
     * Creates a channel listing
     * POST /channels/{channel_id}/listings
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api/channel-listings/createchannellistings
     * @throws GuzzleException
     * @param $channel_id
     * @param $data
     * @return mixed
     */
    public function create($channel_id, $data);

    /**
     * Currently only the following properties can be updated on channel listings: state, variants.state.
     * PUT /channels/{channel_id}/listings
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api/channel-listings/updatechannellistings
     * @throws GuzzleException
     * @param $channel_id
     * @param $listing_id
     * @param $data
     * @return mixed
     */
    public function update($channel_id, $listing_id, $data);
}
