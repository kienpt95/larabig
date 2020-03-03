<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Product\Modifier\Value;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Modifier\Value\Image as ImageInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Image extends AbstractModel implements ImageInterface
{
    protected $resource = "{value_id}/image";
    /**
     * @inheritDoc
     */
    public function create($product_id, $modifier_id, $value_id, $data)
    {
        $result = $this->service()->call('POST',$this->getResource([
            'product_id'=>$product_id
            ,'modifier_id'=>$modifier_id
            ,'value_id'=>$value_id
        ]),$data);

        return $result;
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
