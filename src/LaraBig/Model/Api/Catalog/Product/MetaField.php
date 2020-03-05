<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Product;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Metafield as MetaFieldInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class MetaField extends AbstractModel implements MetaFieldInterface
{
    protected $resource = "{product_id}/metafields";

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
    public function get($product_id, $metafields_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'product_id' => $product_id,
            'metafield_id' => $metafields_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($product_id, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'product_id' => $product_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($product_id, $metafield_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'product_id' => $product_id,
            'metafield_id' => $metafield_id
        ]), $data);

        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($product_id, $metafield_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'product_id' => $product_id,
            'metafield_id' => $metafield_id
        ]));

        return $result;
    }
}
