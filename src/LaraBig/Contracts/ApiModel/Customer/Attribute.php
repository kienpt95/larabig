<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Customer;


interface Attribute
{
    const PREFIX = "attributes";
    const VERSION = "v3";

    /**
     * Returns a list of Customer Attributes. Optional filter parameters can be passed in.
     * GET /customers/attributes
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-attributes/customersattributesget
     * @return mixed
     */
    public function all();

    /**
     * Creates a Customer Attribute. Multiple customer attributes can be created in one call.
     * POST /customers/attributes
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-attributes/customersattributespost
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Customer Attribute. Multiple customer attributes can be updated in one call.
     * PUT /customers/attributes
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-attributes/customersattributesput
     * @param $id_customer_atribute
     * @param $data
     * @return mixed
     */
    public function update($data);

    /**
     * Deletes Customer Attributes from the store.
     * DELETE /customers/attributes
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-attributes/customersattributesdelete
     * @param $id_customer_atribute
     * @return mixed
     */
    public function delete($ids);
}
