<?php


namespace Smartosc\LaraBig\Model\Api\Customer;

use Smartosc\LaraBig\Contracts\ApiModel\Customer\Attribute as IAttribute;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Attribute extends AbstractModel implements IAttribute
{
    protected $resource = "attributes";

    /**
     * @inheritDoc
     */
    public function all()
    {
        $result = $this->service()->call('GET', $this->getResource());
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($data)
    {
        $result = $this->service()->call('POST', $this->getResource(), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($data)
    {
        $result = $this->service()->call('PUT', $this->getResource(), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($ids)
    {
        $result = $this->service()->call('DELETE', $this->getResource(), null, [
            'id:in' => implode(",", $ids)
        ]);
        return $result;
    }
}
