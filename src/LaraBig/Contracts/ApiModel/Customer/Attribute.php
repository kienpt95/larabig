<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Customer;

use GuzzleHttp\Exception\GuzzleException;

interface Attribute
{
    const PREFIX = "attributes";
    const VERSION = "v3";

    /**
     * Returns a list of Customer Attributes. Optional filter parameters can be passed in.
     * GET /customers/attributes
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-attributes/customersattributesget
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Creates a Customer Attribute. Multiple customer attributes can be created in one call.
     * POST /customers/attributes
     * @example $data = [
                            [
                                "name"=> "Date UK",
                                "type"=> "date"
                            ]
                        ];
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-attributes/customersattributespost
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Customer Attribute. Multiple customer attributes can be updated in one call.
     * PUT /customers/attributes
     * @example $data = [
                            [
                                "name"=> "Date UK",
                                "id" => 2
                            ]
                        ];
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-attributes/customersattributesput
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function update($data);

    /**
     * Deletes Customer Attributes from the store.
     * DELETE /customers/attributes
     * $ids = [2];
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-attributes/customersattributesdelete
     * @throws GuzzleException
     * @param $ids
     * @return mixed
     */
    public function delete($ids);
}
