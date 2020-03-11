<?php


namespace Smartosc\LaraBig\Model\Api\Shipping;

use Smartosc\LaraBig\Contracts\ApiModel\Shipping\Carrier as ICarrier;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Carrier extends AbstractModel implements ICarrier
{
    protected $resource = "carrier/{carrier_id}";
}
