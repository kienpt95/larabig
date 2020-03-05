<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Customer;


interface AttributeValue
{
    const PREFIX = "attribute-values";
    const VERSION = "v3";

    /**
     * Returns a list of Customer Attribute Values. Optional filter parameters can be passed in.
     * GET /customers/attribute-values
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-attribute-values/customersattributevaluesget
     * @return mixed
     */
    public function all();

    /**
     * Upserts Customer Attribute Values. Updates the attribute values on the Customer. Multiple customer attribute values can be updated in one call
     * Upsert checks for an existing record. If there is none, it creates the record, if there is a matching record, it updates that record.
     * Up to 10 per call are allowed.
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-attribute-values/customersattributevaluesput
     * @param $customer_id
     * @param $customer_attribute_id
     * @param $value
     * @return mixed
     */
    public function  upsert($customer_id, $customer_attribute_id, $value);

    /**
     * Deletes Customer Attribute Values. Deletes the attribute value from the customer.
     * DELETE /customers/attribute-values
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-attribute-values/customersattributevaluesdelete
     * @param $customer_attribute_value_id
     * @return mixed
     */
    public function delete($customer_attribute_value_id);
}