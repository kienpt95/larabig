<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Product\Modifier;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Modifier\Value as ValueInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Value extends AbstractModel implements ValueInterface
{
    protected $resource = "{modifier_id}/values";

    /**
     * @inheritDoc
     */
    public function all($product_id, $modifier_id)
    {
        $result = $this->service()->call('GET',$this->getResource([
            'product_id'=>$product_id
            ,'modifier_id'=>$modifier_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($product_id, $modifier_id, $value_id)
    {
        $result = $this->service()->call('GET',$this->getResource([
            'product_id'=>$product_id
            ,'modifier_id'=>$modifier_id
            ,'value_id'=>$value_id
        ]));
        return result;
    }

    /**
     * @inheritDoc
     */
    public function create($product_id, $modifier_id, $data)
    {
        $result = $this->service()->call('POST',$this->getResource([
            'product_id'=>$product_id
            ,'modifier_id'=>$modifier_id
        ]),$data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($product_id, $modifier_id, $value_id, $data)
    {
        $result = $this->service()->call('PUT',$this->getResource([
            'product_id'=>$product_id
            ,'modifier_id'=>$modifier_id
            ,'value_id'=>$value_id
        ]),$data);
    }

    /**
     * @inheritDoc
     */
    public function delete($product_id, $modifier_id, $value_id)
    {
        $result = $this->service()->call('DELETE',$this->getResource([
            'product_id'=>$product_id
            ,'modifier_id'=>$modifier_id
            ,'value_id'=>$value_id
        ]));
        return $result;
    }
}
