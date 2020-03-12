<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Customer;

use GuzzleHttp\Exception\GuzzleException;

interface Consent
{
    const PREFIX = "consent";
    const VERSION = "v3";

    /**
     * Gets the customer consent.
     * GET /customers/{customer_id}/consent
     * @example $customer_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-consent/customersconsentbycustomerid-get
     * @throws GuzzleException
     * @param $customerId
     * @return mixed
     */
    public function get($customer_id);

    /**
     * Updates the customer consent.
     * PUT /customers/{customer_id}/consent
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-consent/customersconsentbycustomerid-put
     * @throws GuzzleException
     * @param $customer_id
     * @param $data
     * @return mixed
     */
    public function update($customer_id, $data);
}
