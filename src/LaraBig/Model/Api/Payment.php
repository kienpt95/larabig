<?php


namespace Smartosc\LaraBig\Model\Api;

use Smartosc\LaraBig\Contracts\ApiModel\Payment as IPayment;

class Payment extends AbstractModel implements IPayment
{
    protected $resource = "payments";
}
