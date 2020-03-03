<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Brand;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Brand\Metafield as MetaFliedInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;


class Metafield extends AbstractModel implements MetaFliedInterface
{

    protected $resource = "{brand_id}/metafields";
    /**
     * @inheritDoc
     */
    public function all($brand_id)
    {
        $result = $this->service()->call('GET',$this->getResource(['brand_id'=>$brand_id]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($brand_id, $metafield_id)
    {
        $result = $this->service()->call('GET',$this->getResource([
            'brand_id'=>$brand_id
            ,'metafield_id'=>$metafield_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($brand_id, $data)
    {
        $result = $this->service()->call('POST',$this->getResource([
            'brand_id'=>$brand_id
        ]),$data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($brand_id, $metafield_id, $data)
    {
        $result = $this->service()->call('PUT',$this->getResource([
            'brand_id'=>$brand_id
            ,'metafield_id'=>$metafield_id
        ]),$data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($brand_id, $metafield_id)
    {
        $result = $this->service()->call('DELETE',$this->getResource([
            'brand_id'=>$brand_id
            ,'metafield_id'=>$metafield_id
        ]));
        return $result;
    }
}
