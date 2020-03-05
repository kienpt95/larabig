<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Shipping;


interface Zone
{
    const PREFIX = "zones";
    const VERSION  = "v2";

    /**
     * Returns a list of all Shipping Zones.
     * GET/shipping/zones
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-zones/getallshippingzones
     * @return mixed
     */
    public function all();

    /**
     * Returns a single Shipping Zone.
     * GET /shipping/zones/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-zones/getashippingzone
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * Creates a Shipping Zone.
     * POST /shipping/zones
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-zones/createashippingzones
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Shipping Zone.
     * PUT /shipping/zones/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-zones/updateashippingzone
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data);

    /**
     * Deletes a Shipping Zone.
     * DELETE /shipping/zones/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-zones/deleteashippingzone
     * @param $id
     * @return mixed
     */
    public function delete($id);
}