<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Customer\Address;
use Smartosc\LaraBig\Contracts\ApiModel\Customer\Attribute;
use Smartosc\LaraBig\Contracts\ApiModel\Customer\AttributeValue;
use Smartosc\LaraBig\Contracts\ApiModel\Customer\Consent;
use Smartosc\LaraBig\Contracts\ApiModel\Customer\FormField;
use Smartosc\LaraBig\Contracts\ApiModel\Customer\Subscriber;

/**
 * Interface Customer
 * @package Smartosc\LaraBig\Contracts\ApiModel
 * @property Address address
 * @property Attribute attribute
 * @property AttributeValue attribute_value
 * @property Consent consent
 * @property FormField form_field
 * @property Subscriber subscriber
 */
interface Customer
{
    const PREFIX = 'customers';
    const VERSION = 'v3';

    /**
     * Returns a list of Customers. Optional filter parameters can be passed in.
     * GET /customers
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customers/customersget
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Creates Customers. Multiple customers can be created in one call.
     * POST /customers
     * @example $data = [
                            [
                            "email" => "johndoe@email.com",
                            "first_name" => "John",
                            "last_name" => "Doe",
                            "company" => "BigCommerce",
                            "phone" => "1234567890",
                            "notes" => "Warehouse",
                            "addresses" => [
                            [
                            "first_name" => "John",
                            "last_name" => "Doe",
                            "address1" => "Bennelong Point ",
                            "city" => "Sydney",
                            "state_or_province" => "New South Wales",
                            "postal_code" => "2000",
                            "country_code" => "AU",
                            "phone" => "1234567890",
                            "address_type" => "commercial"
                            ],
                            [
                            "first_name" => "John",
                            "last_name" => "Doe",
                            "address1" => "111 E West Street",
                            "address2" => "654",
                            "city" => "Akron",
                            "state_or_province" => "Ohio",
                            "postal_code" => "44325",
                            "country_code" => "US",
                            "phone" => "1234567890",
                            "address_type" => "residential"
                            ]
                            ],
                            "authentication" => [
                            "force_password_reset" => true,
                            "new_password" => "tempPassword1"
                            ]
                            ]
                            ];
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customers/customerspost
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates Customers. Subresource updates are not supported. Multiple customers can be updated in one call.
     * PUT /customers
     * @eample $data =  $data = [
                                [
                                 "id" => 2,
                                "phone" => "09p9999999"
                                 ]
                                ]
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customers/customersput
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function update($data);

    /**
     * Deletes Customers.
     * DELETE /customers
     * @example $ids = [2,4];
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customers/customersdelete
     * @throws GuzzleException
     * @param $ids
     * @return mixed
     */
    public function delete($ids);
}
