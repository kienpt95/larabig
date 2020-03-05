<?php

namespace Smartosc\LaraBig\Model\Api\Catalog;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\a;
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
        $resource = $this->getResource() . '/' . $id;
        $result = $this->service()->call('GET', $resource);
        return $result;
    }

    public function create($data)
    {
        $resource = $this->getResource();
        $result = $this->service()->call('POST', $resource, $data);
        return $result;
    }

    public function update($id, $data)
    {
        $resource = $this->getResource() . '/' . $id;
        $result = $this->service()->call('PUT', $resource, $data);
        return $result;
    }

    public function delete($id)
    {
        $resource = $this->getResource() . '/' . $id;
        $result = $this->service()->call('DELETE', $resource);
        return $result;
    }
}
