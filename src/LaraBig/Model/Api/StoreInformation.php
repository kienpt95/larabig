<?php


namespace Smartosc\LaraBig\Model\Api;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\StoreInformation as IStoreInformation;

class StoreInformation extends AbstractModel implements IStoreInformation
{
    protected $resource = "store/{store_id}";
    /**
     * @inheritDoc
     */
    public function get()
    {
        $result  = $this->service()->call('GET', $this->getResource());
        return $result;
    }
}
