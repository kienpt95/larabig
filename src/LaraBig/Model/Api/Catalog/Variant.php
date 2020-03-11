<?php


namespace Smartosc\LaraBig\Model\Api\Catalog;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Variant as VariantInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Variant extends AbstractModel implements VariantInterface
{
    protected $resource = "variants/{variant_id}";
    /**
     * @inheritDoc
     */
    public function all()
    {
        $result = $this->service()->call('GET', $this->getResource());
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($data)
    {
        $result = $this->service()->call('GET', $this->getResource(), $data);
        return $result;
    }
}
