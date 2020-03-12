<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Customer;

use GuzzleHttp\Exception\GuzzleException;

interface Address
{
    const PREFIX = "addresses";
    const VERSION  = "v3";

    /**
     * Returns a list of Customer Addresses. Optional filter parameters can be passed in.
     * GET /customers/addresses
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-addresses/customersaddressesget
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Creates a Customer Address. Multiple customer addresses can be created in one call.
     * POST /customers/addresses
     * $data = [
                    [
                    "first_name"=> "Kieu",
                    "last_name"=> "Long",
                    "address1"=> "7, Ngo 141, Dai Dong",
                    "address2"=> "654",
                    "city"=> "Hanoi",
                    "state_or_province"=> "Thach That",
                    "postal_code"=> "10000",
                    "country_code"=> "VN",
                    "phone"=> "19008198",
                    "address_type"=> "residential",
                    "customer_id"=> 2
                    ]
                    ];
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-addresses/customersaddressespost
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Customer Address. Multiple customer addresses can be updated in one call.
     * PUT /customers/addresses
     * @example $data = [
                    [
                    "first_name" => "Kien",
                    "last_name" => "Pham",
                    "address1" => "141 E West Street",
                    "address2" => "654",
                    "city" => "Akron",
                    "state_or_province" => "Ohio",
                    "postal_code" => "44325",
                    "country_code" => "US",
                    "phone" => "0123456789",
                    "address_type" => "residential",
                    "id" => 6
                    ]
                    ];
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-addresses/customersaddressesput
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function update($data);

    /**
     * Deletes a Customer Address.
     * DELETE /customers/addresses
     * @example $ids = [2,4];
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-addresses/customersaddressesdelete
     * @throws GuzzleException
     * @param $ids
     * @return mixed
     */
    public function delete($ids);
}
