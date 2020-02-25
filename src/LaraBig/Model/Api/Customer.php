<?php


namespace Smartosc\LaraBig\Model\Api;


class Customer extends AbstractModel implements \Smartosc\LaraBig\Contracts\ApiModel\Customer
{
    protected $resource = "customers";

    public function all()
    {
        // TODO: Implement all() method.
    }

    public function get($id)
    {
        // TODO: Implement get() method.
    }

    public function create($data)
    {
        // TODO: Implement create() method.
    }

    public function update($customer_id, $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($customer_id)
    {
        // TODO: Implement delete() method.
    }
}