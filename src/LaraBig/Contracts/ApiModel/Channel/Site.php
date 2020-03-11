<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Channel;


use GuzzleHttp\Exception\GuzzleException;

interface Site
{
    const PREFIX = "site";
    const VERSION = "v3";

    /**
     * Returns site data for given channel
     * GET /channels/{channel_id}/site
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api/channel-site/get-channel-site
     * @throws GuzzleException
     * @param $channel_id
     * @return mixed
     */
    public function  get($channel_id);

    /**
     *  Creates a site for provided channel.
     * POST /channels/{channel_id}/site
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api/channel-site/postchannelsite
     * @throws GuzzleException
     * @param $channel_id
     * @param $data
     * @return mixed
     */
    public function create($channel_id, $data);

    /**
     * Updates a site for provided channel
     * PUT /channels/{channel_id}/site
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/channels-listings-api/channel-site/put-channel-site
     * @throws GuzzleException
     * @param $channel_id
     * @param $data
     * @return mixed
     */
    public function update($channel_id, $data);
}
