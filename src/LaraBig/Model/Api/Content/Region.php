<?php


namespace Smartosc\LaraBig\Model\Api\Content;

use Smartosc\LaraBig\Contracts\ApiModel\Content\Region as IRegionuse;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Region extends AbstractModel implements IRegionuse
{
    protected $resource = "regions";
    /**
     * @inheritDoc
     */
    public function all()
    {
        $result = $this->service()->call('GET', $this->getResource());
        return $result;
    }
}
