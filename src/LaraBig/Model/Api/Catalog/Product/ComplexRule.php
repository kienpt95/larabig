<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Product;


use Smartosc\LaraBig\Model\Api\AbstractModel;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\ComplexRule as ComplexRuleInterface;
class ComplexRule extends AbstractModel implements ComplexRuleInterface
{

    protected $resource = "{product_id}/complex-rules";
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
    public function get($product_id, $complex_rule_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'product_id' => $product_id,
            'complex_rule_id' => $complex_rule_id
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
    public function update($product_id, $complex_rule_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'product_id' => $product_id,
            'complex_rule_id' => $complex_rule_id
        ]), $data);

        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($product_id, $complex_rule_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'product_id' => $product_id,
            'complex_rule_id' => $complex_rule_id
        ]));

        return $result;
    }
}
