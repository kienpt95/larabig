<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;

use Smartosc\LaraBig\Contracts\ApiModel\Customer\Address;
use Smartosc\LaraBig\Contracts\ApiModel\Customer\Attribute;
use Smartosc\LaraBig\Contracts\ApiModel\Customer\AttributeValue;
use Smartosc\LaraBig\Contracts\ApiModel\Customer\Consent;
use Smartosc\LaraBig\Contracts\ApiModel\Customer\FormField;

/**
 * Interface Customer
 * @package Smartosc\LaraBig\Contracts\ApiModel
 * @property Address address
 * @property Attribute attribute
 * @property AttributeValue attribute_value
 * @property Consent consent
 * @property FormField form_field
 *
 */
interface Customer
{
    const PREFIX = 'customers';
    const VERSION = 'v3';

    /**
     * Returns a list of Customers. Optional filter parameters can be passed in.
     * GET /customers
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customers/customersget
     * @return mixed
     */
    public function all();

    /**
     * Creates Customers. Multiple customers can be created in one call.
     * POST /customers
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customers/customerspost
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates Customers. Subresource updates are not supported. Multiple customers can be updated in one call.
     * PUT /customers
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customers/customersput
     * @param $data
     * @return mixed
     */
    public function update($data);

    /**
     * Deletes Customers.
     * DELETE /customers
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customers/customersdelete
     * @param $ids
     * @return mixed
     */
    public function delete($ids);
}
