<?php


namespace Smartosc\LaraBig\Model\Api\Payment;

use Smartosc\LaraBig\Contracts\ApiModel\Payment\AccessToken as IAccessToken;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class AccessToken extends AbstractModel implements IAccessToken
{
    protected $resource = "access_tokens";
    /**
     * @inheritDoc
     */
    public function create($data)
    {
        $result = $this->service()->call('POST', $this->getResource(), $data);
        return $result;
    }
}
