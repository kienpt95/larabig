<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Product;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Video as VideoInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;


class Video extends AbstractModel implements VideoInterface
{

    protected $resource = "{product_id}/videos";

    /**
     * @inheritDoc
     */
    public function all($product_id)
    {
        $result = $this->service()->call('GET',$this->getResource([
            'product_id'=>$product_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($product_id, $id)
    {
        $result = $this->service()->call('GET',$this->getResource([
            'product_id'=>$product_id
            ,'id'=>$id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($product_id, $data)
    {
        $result = $this->service()->call('POST',$this->getResource([
            'product_id'=>$product_id
        ]),$data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($product_id, $id, $data)
    {
        $result = $this->service()->call('PUT',$this->getResource([
            'product_id'=>$product_id
            ,'id'=>$id
        ]),$data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($product_id, $id)
    {
        $result = $this->service()->call('DELETE',$this->getResource([
            'product_id'=>$product_id
            ,'id'=>$id
        ]));
        return $result;
    }
}
