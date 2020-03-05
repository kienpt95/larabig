<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Product;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Review as ReviewInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Review extends AbstractModel implements ReviewInterface
{
    protected $resource = "{product_id}/reviews";
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
    public function get($product_id, $review_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'product_id' => $product_id,
            'review_id' => $review_id
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
    public function update($product_id, $review_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'product_id' => $product_id,
            'review_id' => $review_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($product_id, $review_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'product_id' => $product_id,
            'review_id' => $review_id
        ]));
        return $result;
    }
}
