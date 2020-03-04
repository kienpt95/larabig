<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Product;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Variant as VariantInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Variant extends AbstractModel implements VariantInterface
{
    protected $resource = "{product_id}/variants";

    /**
     * @inheritDoc
     */
    public function all($product_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'product_id' => $product_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($product_id, $variant_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'product_id' => $product_id,
            'variant_id' => $variant_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($product_id, $data)
    {
        $result = $this->service()->call('POST',$this->getResource([
            'product_is' => $product_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($product_id, $variant_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'product_id' => $product_id,
            'variant_id' => $variant_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($product_id, $variant_id)
    {
        $result = $this->resource->call('DELETE', $this->getResource([
            'product_id' => $product_id,
            'variant_id' => $variant_id
        ]));
        return $result;
    }
}
