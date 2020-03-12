<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Customer;

use GuzzleHttp\Exception\GuzzleException;

interface FormField
{
    const PREFIX = "form-field-values";
    const VERSION = "v3";

    /**
     * Returns a list of Form Field Values for the Customer or Customer Address object.
     * GET /customers/form-field-values
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-form-fields/customerformfieldsget
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Upserts Customer Form Field Values. Updates the form field values on the Customer or Customer Address. Multiple form field values can be updated in one call.
     * Upsert checks for an existing record, if there is none it creates the record, if there is a matching record it updates that record.
     * PUT /customers/form-field-values
     * @example $data = [
                        [
                        "customer_id"=> 1,
                        "name"=> "color",
                        "value"=> "blue"
                        ],
                        [
                        "customer_id"=> 1,
                        "name"=> "weight",
                        "value"=> 12.345
                        ],
                        [
                        "customer_id"=> 1,
                        "name"=> "colors",
                        "value"=> [
                        "red",
                        "green",
                        "black"
                        ]
                        ]
                        ];
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-form-fields/customerformfieldvalueput
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function upsert($data);
}
