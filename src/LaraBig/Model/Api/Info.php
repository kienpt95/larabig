<?php

namespace Smartosc\LaraBig\Model\Api;

class Info extends AbstractModel implements \Smartosc\LaraBig\Contracts\ApiModel\Info
{
    protected $resource = "store";

    /** @inheritDoc */
    public function get()
    {
        $result = $this->service()->call('GET', $this->getResource([], 'v2'));
        return $result;
    }
}
