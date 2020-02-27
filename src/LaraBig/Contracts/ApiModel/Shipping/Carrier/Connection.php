<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Shipping\Carrier;


interface Connection
{
    const PREFIX = "connection";
    const VERSION = "v2";

    /**
     * Creates a Carrier Connection
     * POST /shipping/carrier/connection
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-carrier/postshippingcarrierconnection
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Carrier Connection.
     * Updating the carrier connection is done using the same information as creating the connection. This endpoint can be used to update credentials.
     * PUT  /shipping/carrier/connection
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-carrier/updateacarrierconnection
     * @param $data
     * @return mixed
     */
    public function update($data);

    /**
     * Deletes a Carrier Connection.
     * DELETE /shipping/carrier/connection
     * @see https://developer.bigcommerce.com/api-reference/store-management/shipping-api/shipping-carrier/deletecarrierconnection
     * @param $carrier_id
     * @return mixed
     */
    public function delete($carrier_id);
}