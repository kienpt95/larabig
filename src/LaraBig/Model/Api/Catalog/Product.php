<?php

namespace Smartosc\LaraBig\Model\Api\Catalog;

use Smartosc\LaraBig\Model\Api\AbstractModel;

class Product extends AbstractModel implements \Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product
{
    protected $resource = 'products';

    public function all()
    {
        $result = $this->service()->call('GET', $this->getResource());
        return $result;
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

    public function update($id, $data)
    {
        // TODO: Implement update() method.
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
    }
}
