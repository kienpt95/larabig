<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Product\Option;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Option\Value as ValueInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Value extends AbstractModel implements ValueInterface
{
    protected $resource = "values/{value_id}";

    /**
     * @inheritDoc
     */
    public function all($product_id, $option_id)
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
    public function get($product_id, $option_id, $value_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'product_id' => $product_id,
            'option_id' => $option_id,
            'value_id' => $value_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($product_id, $option_id, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'product_id' => $product_id,
            'option_id' => $option_id
        ]), $data);
        return  $result;
    }

    /**
     * @inheritDoc
     */
    public function update($product_id, $option_id, $value_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'product_id' => $product_id,
            'option_id' => $option_id,
            'value_id' => $value_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($product_id, $option_id, $value_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'product_id' => $product_id,
            'option_id' => $option_id,
            'value_id' => $value_id
        ]));
        return $result;
    }
}
