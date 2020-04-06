<?php

namespace Smartosc\LaraBig\Model\Api;

class Store extends AbstractModel implements \Smartosc\LaraBig\Contracts\ApiModel\Store
{
    protected $resource = "store";

    /** @inheritDoc */
    public function getInformation()
    {
        $result = $this->service()->call('GET', $this->getResource([], 'v2'));
        return $result;
    }
}
