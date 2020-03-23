<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Site\Route;

/**
 * Interface Site
 * @package Smartosc\LaraBig\Contracts\ApiModel
 * @property Route route
 */
interface Site
{
    const PREFIX = "sites";
    const VERSION = "v3";

    /**
     * Creates a site for provided channel.
     * POST /sites
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/post-site
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Returns site data for given channel.
     * GET /sites/{site_id}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/get-site
     * @throws GuzzleException
     * @param $site_id
     * @return mixed
     */
    public function get($site_id);

    /**
     * Creates a site for provided channel.
     * POST /sites
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/post-site
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates  a site for provided channel.
     * PUT /sites/{site_id}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/put-site
     * @throws GuzzleException
     * @param $side_id
     * @param $data
     * @return mixed
     */
    public function update($site_id, $data);

    /**
     * Delete a site for provided channel
     * DELETE /sites/{site_id}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/sites/delete-site
     * @throws GuzzleException
     * @param $side_id
     * @return mixed
     */
    public function delete($site_id);
}
