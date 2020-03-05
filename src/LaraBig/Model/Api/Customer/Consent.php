<?php


namespace Smartosc\LaraBig\Model\Api\Customer;

use Smartosc\LaraBig\Contracts\ApiModel\Customer\Consent as IConsent;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Consent extends AbstractModel implements IConsent
{
    protected $resource = "consent";

    /**
     * @inheritDoc
     */
    public function get($customerId)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'customerId' => $customerId
        ]));
        return  $result;
    }

    /**
     * @inheritDoc
     */
    public function update($customerId, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'customerId' => $customerId
        ]), $data);
        return $result;
    }
}
