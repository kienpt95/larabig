<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Product;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\BulkPricingRule as BPRInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class BulkPricingRule extends AbstractModel implements BPRInterface
{
    protected $resource = "{product_id}/bulk-pricing-rules";
    /**
     * @inheritDoc
     */
    public function all($product_id)
    {
        $result =  $this->service()->call('GET',$this->getResource([
            'product_id'=>$product_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($product_id, $data)
    {
        $result = $this->service()->call('POST',$this->getResource([
            'product_id'=>$product_id
        ]),$data);
    }

    /**
     * @inheritDoc
     */
    public function get($product_id, $bulk_pricing_rule_id)
    {
        $result = $this->service()->call('GET',$this->getResource([
            'product_id'=>$product_id,
            'bulk_pricing_rule_id'=>$bulk_pricing_rule_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($product_id, $bulk_pricing_rule_id, $data)
    {
        $result = $this->service()->call('PUT',$this->getResource([
            'product_id'=>$product_id
            ,'bulk_pricing_rule_id'=>$bulk_pricing_rule_id
        ]),$data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($product_id, $bulk_pricing_rule_id)
    {
        $result = $this->service()->call('DELETE',$this->getResource([
            'product_id'=>$product_id
            ,'bulk_pricing_rule_id'=>$bulk_pricing_rule_id
        ]));
        return $result;
    }
}
