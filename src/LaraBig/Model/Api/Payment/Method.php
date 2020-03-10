<?php


namespace Smartosc\LaraBig\Model\Api\Payment;

use Smartosc\LaraBig\Contracts\ApiModel\Payment\Method as IMethod;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Method extends AbstractModel implements IMethod
{
    protected $resource = "methods/{id}";
    /**
     * @inheritDoc
     */
    public function getAccepted()
    {
        // TODO: Implement getAccepted() method.
        $result = $this->service()->call('GET', $this->getResource());
        return $result;
    }
}
