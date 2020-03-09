<?php

namespace Smartosc\LaraBig\Model\Api\Catalog\Product;

use Smartosc\LaraBig\Model\Api\AbstractModel;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Image as ImageInterface;

class Image extends AbstractModel implements ImageInterface
{
    protected $resource = "images/{image_id}";

    /** @inheritDoc */
    public function all($product_id)
    {
        $result = $this->service()->call(
            'GET',
            $this->getResource(
            [
                'product_id' => $product_id
            ]
        )
        );

        return $result;
    }

    /** @inheritDoc */
    public function get($product_id, $image_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'product_id' => $product_id,
            'image_id' => $image_id,
        ]));
        return $result;
    }

    /** @inheritDoc */
    public function create($product_id, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'product_id' => $product_id

        ], $data));
        return $result;
    }

    /** @inheritDoc */
    public function update($product_id, $image_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'product_id' => $product_id,
            'image_id' => $image_id

        ], $data));
        return $result;
    }

    /** @inheritDoc */
    public function delete($product_id, $image_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'product_id' => $product_id,
            'image_id' => $image_id
        ]));
        return $result;
    }
}
