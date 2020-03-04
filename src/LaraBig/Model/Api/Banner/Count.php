<?php


namespace Smartosc\LaraBig\Model\Api\Banner;

use Smartosc\LaraBig\Contracts\ApiModel\Banner\Count as CountInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Count extends AbstractModel implements CountInterface
{
    protected $resource = "count";
    /**
     * @inheritDoc
     */
    public function count()
    {
        $result = $this->service()->call('GET',$this->getResource());
        return $result;
    }
}
