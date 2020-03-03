<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Brand;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Brand\Image as ImageInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Image extends AbstractModel implements  ImageInterface
{
    protected $resource = "{brand_id}/image";
    /**
     * @inheritDoc
     */
    public function create($brand_id, $data)
    {
        $result = $this->service()->call('POST',$this->getResource(['brand_id'=>$brand_id]),$data);
        return  $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($brand_id)
    {
        $result = $this->service()->call('DELETE',$this->getResource(['brand_id'=>$brand_id]));
        return $result;
    }
}
