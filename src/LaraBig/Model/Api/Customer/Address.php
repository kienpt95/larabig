<?php


namespace Smartosc\LaraBig\Model\Api\Customer;

use Smartosc\LaraBig\Contracts\ApiModel\Customer\Address as IAddress;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Address extends AbstractModel implements IAddress
{
    protected $resource = "addresses";

    /**
     * @inheritDoc
     */
    public function all()
    {
        $result = $this->service()->call('GET', $this->getResource());
        return  $result;
    }

    /**
     * @inheritDoc
     */
    public function create($data)
    {
        $result = $this->service()->call('GET', $this->getResource(), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($data)
    {
        $result = $this->service()->call('PUT', $this->getResource(), $data);
    }

    /**
     * @inheritDoc
     */
    public function delete($ids)
    {
        $result = $this->service()->call('DELETE', $this->getResource(), null,[
            'id:in' => implode(",",$ids)
        ]);
        return $result;
    }
}
