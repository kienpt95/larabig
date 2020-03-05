<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Customer;

interface Consent
{
    const PREFIX = "consent";
    const VERSION = "v3";

    /**
     * Gets the customer consent.
     * GET /customers/{customerId}/consent
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-consent/customersconsentbycustomerid-get
     * @param $customerId
     * @return mixed
     */
    public function get($customerId);

    /**
     * Updates the customer consent.
     * PUT /customers/{customerId}/consent
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/v3-customers-api/customer-consent/customersconsentbycustomerid-put
     * @param $customerId
     * @param $data
     * @return mixed
     */
    public function update($customerId, $data);
}
