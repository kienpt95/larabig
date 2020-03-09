<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Product;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Option as OptionInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Option extends AbstractModel implements OptionInterface
{
    protected $resource = "options/{option_id}";
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
    public function get($product_id, $option_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'product_id' => $product_id,
            'option_id' => $option_id
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
    public function update($product_id, $option_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'product_id' => $product_id,
            'option_id' => $option_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($product_id, $option_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'product_id' => $product_id,
            'option_id' => $option_id
        ]));
        return $result;
    }
}
