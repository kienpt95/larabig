<?php


namespace Smartosc\LaraBig\Model\Api\Customer;

use Smartosc\LaraBig\Contracts\ApiModel\Customer\AttributeValue as IAttributeValue;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class AttributeValue extends AbstractModel implements IAttributeValue
{
    protected $resource = "attribute-values";
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
    public function upsert($arr)
    {
        $result = $this->service()->call('PUT', $this->getResource(), $arr);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($ids)
    {
        $result = $this->service()->call('DELETE', $this->getResource(), null, [
            'id:in' => implode(',', $ids)
        ]);
        return $result;
    }
}
