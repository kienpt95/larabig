<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Customer;

interface Address
{
    const PREFIX = "addresses";
    const VERSION  = "v3";

    /**
     * Returns a list of Customer Addresses. Optional filter parameters can be passed in.
     * GET /customers/addresses
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-addresses/customersaddressesget
     * @return mixed
     */
    public function all();

    /**
     * Creates a Customer Address. Multiple customer addresses can be created in one call.
     * POST /customers/addresses
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-addresses/customersaddressespost
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Customer Address. Multiple customer addresses can be updated in one call.
     * PUT /customers/addresses
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-addresses/customersaddressesput
     * @param $data
     * @param $customer_id
     * @param $id_customer_address
     * @return mixed
     */
    public function update($data);

    /**
     * Deletes a Customer Address.
     * DELETE /customers/addresses
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-addresses/customersaddressesdelete
     * @param $id_customer_address
     * @return mixed
     */
    public function delete($ids);
}
