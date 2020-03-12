<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Shipping;

use GuzzleHttp\Exception\GuzzleException;

interface Zone
{
    const PREFIX = "zones";
    const VERSION  = "v2";

    /**
     * Returns a list of all Shipping Zones.
     * GET/shipping/zones
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-zones/getallshippingzones
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Returns a single Shipping Zone.
     * GET /shipping/zones/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-zones/getashippingzone
     * @throws GuzzleException
     * @param $id
     * @return mixed
     */
    public function get($zone_id);

    /**
     * Creates a Shipping Zone.
     * POST /shipping/zones
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-zones/createashippingzones
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Shipping Zone.
     * PUT /shipping/zones/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-zones/updateashippingzone
     * @throws GuzzleException
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($zone_id, $data);

    /**
     * Deletes a Shipping Zone.
     * DELETE /shipping/zones/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-zones/deleteashippingzone
     * @throws GuzzleException
     * @param $id
     * @return mixed
     */
    public function delete($zone_id);
}
