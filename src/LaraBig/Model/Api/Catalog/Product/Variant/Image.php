<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Product\Variant;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Variant\Image as ImageInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Image extends AbstractModel implements ImageInterface
{
    protected $resource = "image/{image_id}";
    /**
     * @inheritDoc
     */
    public function create($product_id, $variant_id, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'product_id' => $product_id,
            'variant_id' => $variant_id
        ]), $data);
        return $result;
    }
}
