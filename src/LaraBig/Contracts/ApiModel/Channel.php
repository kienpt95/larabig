<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Channel\Listing;
use Smartosc\LaraBig\Contracts\ApiModel\Channel\Site;

/**
 * Interface Channel
 * @package Smartosc\LaraBig\Contracts\ApiModel
 * @property Listing listing
 * @property Site site
 */
interface Channel
{
    const PREFIX = "channels";
    const VERSION = "v3";

    /**
     * Returns a list of Channels. Will always return the BigCommerce storefront with an ID of 1.
     * GET /channels
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api/channels/listchannels
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Creates a Channel.
     * POST /channels
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api/channels/createchannel
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Returns a Channel. Channel ID 1 returns the BigCommerce storefront.
     * GET /channels/{channel_id}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api/channels/getchannel
     * @throws GuzzleException
     * @param $channel_id
     * @return mixed
     */
    public function get($channel_id);

    /**
     * Updates a Channel. Partial updates are supported. Currently, if a field that cannot be updated is passed in, the API not respond with an error.
     * PUT /channels/{channel_id}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api/channels/updatechannel
     * @throws GuzzleException
     * @param $channel_id
     * @param $data
     * @return mixed
     */
    public function update($channel_id, $data);
}
