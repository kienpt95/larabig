<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


interface CustomerGroup
{
    const PREFIX = "customer_groups";
    const VERSION  = "v2";

    /**
     * Returns a list of Customer Groups. Default sorting is by customer-group id, from lowest to highest.
     * GET /customer_groups
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/customers-api/customer-groups/getallcustomergroups
     * @return mixed
     */
    public function all();

    /**
     * Returns a Customer Group.
     * GET /customer_groups/{customer_group_id}
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/customers-api/customer-groups/getacustomergroup
     * @param $customer_group_id
     * @return mixed
     */
    public function get($customer_group_id);

    /**
     * Creates a Customer Group.
     * POST /customer_groups
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/customers-api/customer-groups/createacustomergroup
     * @param $data
     * @return mixed
     */
    public function  create($data);

    /**
     * Updates a Customer Group.
     * PUT /customer_groups/{customer_group_id}
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/customers-api/customer-groups/updateacustomergroup
     * @param $customer_group_id
     * @param $data
     * @return mixed
     */
    public function update($customer_group_id, $data);

    /**
     * Deletes a Customer Group.
     * DELETE /customer_groups/{customer_group_id}
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/customers-api/customer-groups/deleteacustomergroup
     * @param $customer_group_id
     * @return mixed
     */
    public function delete($customer_group_id);
}