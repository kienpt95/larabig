<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Product\Variant;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Variant\Metafield as MetafieldInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Metafield extends AbstractModel implements MetafieldInterface
{
    protected $resource = "metafields/{metafield_id}";
    /**
     * @inheritDoc
     */
    public function all($product_id, $variant_id)
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
    public function get($product_id, $variant_id, $metafield_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'product_id' => $product_id,
            'variant_id' => $variant_id,
            'metafield_id' => $metafield_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($product_id, $variant_id, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'product_id'=>$product_id
            ,'variant_id'=>$variant_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($product_id, $variant_id, $metafield_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'product_id'=>$product_id
            ,'variant_id'=>$variant_id
            ,'metafield_id'=>$metafield_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($product_id, $variant_id, $metafield_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'product_id' => $product_id,
            'variant_id' => $variant_id,
            'metafield_id' => $metafield_id
        ]));
        return $result;
    }
}
