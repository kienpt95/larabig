<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Shipping\Zone;

interface Method
{
    const PREFIX = "methods";
    const VERSION = "v2";

    /**
     * Returns a list of Shipping Methods in a zone. Default sorting is by shipping-method id, from lowest to highest.
     * GET /shipping/zones/{zone_id}/methods
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-method/getshippingmethodszone
     * @param $zone_id
     * @return mixed
     */
    public function all($zone_id);

    /**
     * Returns a single Shipping Method in a zone. Real Time Carrier Connections are also supported by this endpoint.
     * GET /shipping/zones/{zone_id}/methods/{method_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-method/getashippingmethod
     * @param $zone_id
     * @param $method_id
     * @return mixed
     */
    public function get($zone_id, $method_id);

    /**
     * Creates a Shipping Method within a shipping zone. Real Time Carrier Connections are also supported by this endpoint.
     * POST /shipping/zones/{zone_id}/methods
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-method/createashippingmethod
     * @param $zone_id
     * @param $data
     * @return mixed
     */
    public function create($zone_id, $data);

    /**
     * Updates a Shipping Method in a zone. Real Time Carrier Connections are also supported by this endpoint.
     * PUT /shipping/zones/{zone_id}/methods/{method_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-method/updateashippingmethod
     * @param $zone_id
     * @param $method_id
     * @param $data
     * @return mixed
     */
    public function update($zone_id, $method_id, $data);

    /**
     * Deletes an Shipping Method. Real Time Carrier Connections can also be deleted.
     * DELETE /shipping/zones/{zone_id}/methods/{method_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-method/deleteashippingmethod
     * @param $zone_id
     * @param $method_id
     * @return mixed
     */
    public function delete($zone_id, $method_id);
}
