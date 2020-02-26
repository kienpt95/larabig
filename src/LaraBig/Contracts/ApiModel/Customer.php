<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;

interface Customer
{
    const PREFIX = 'customers';
    const VERSION = 'v3';

    public function all();

    public function get($id);

    public function create($data);

    public function update($customer_id, $data);

    public function delete($customer_id);
}
