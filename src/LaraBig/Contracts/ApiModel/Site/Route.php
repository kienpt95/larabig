<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Site;


use GuzzleHttp\Exception\GuzzleException;

interface Route
{
    const PREFIX = "routes";
    const VERSION  = "v3";

    /**
     * Return a list
     * GET /sites/{site_id}/routes
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/site-routes/index-site-routes
     * @throws GuzzleException
     * @param $site_id
     * @return mixed
     */
    public function all($site_id);

    /**
     *
     * GET /sites/{site_id}/routes/{route_id}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/site-routes/get-site-route
     * @throws GuzzleException
     * @param $site_id
     * @param $route_id
     * @return mixed
     */
    public function get($site_id, $route_id);

    /**
     * Create  a route
     * POST /sites/{site_id}/routes
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/site-routes/post-site-route
     * @throws GuzzleException
     * @param $site_id
     * @param $data
     * @return mixed
     */
    public function create($site_id, $data);

    /**
     * Update a route
     * PUT /sites/{site_id}/routes/{route_id}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/site-routes/put-site-route
     * @throws GuzzleException
     * @param $site_id
     * @param $route_id
     * @param $data
     * @return mixed
     */
    public function update($site_id, $route_id, $data);

    /**
     * Delete a route
     * DELETE /sites/{site_id}/routes/{route_id}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/sites-routes-api/site-routes/delete-route
     * @throws GuzzleException
     * @param $site_id
     * @param $route_id
     * @return mixed
     */
    public function delete($site_id, $route_id);
}
