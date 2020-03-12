<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Customer;

use GuzzleHttp\Exception\GuzzleException;

interface AttributeValue
{
    const PREFIX = "attribute-values";
    const VERSION = "v3";

    /**
     * Returns a list of Customer Attribute Values. Optional filter parameters can be passed in.
     * GET /customers/attribute-values
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-attribute-values/customersattributevaluesget
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Upserts Customer Attribute Values. Updates the attribute values on the Customer. Multiple customer attribute values can be updated in one call
     * Upsert checks for an existing record. If there is none, it creates the record, if there is a matching record, it updates that record.
     * Up to 10 per call are allowed.
     * PUT /customers/attribute-values
     * @example $arr = [
                    [
                    "attribute_id"=> 1,
                    "value"=> "03/12/2020",
                    "customer_id"=> 1,
                    "id"=> 1
                    ]
                    ];
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-attribute-values/customersattributevaluesput
     * @throws GuzzleException
     * @param $arr
     * @return mixed
     */
    public function upsert($arr);

    /**
     * Deletes Customer Attribute Values. Deletes the attribute value from the customer.
     * DELETE /customers/attribute-values
     * @example $ids = [1,2];
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-attribute-values/customersattributevaluesdelete
     * @throws GuzzleException
     * @param $ids
     * @return mixed
     */
    public function delete($ids);
}
