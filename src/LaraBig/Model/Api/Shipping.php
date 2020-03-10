<?php


namespace Smartosc\LaraBig\Model\Api;

use Smartosc\LaraBig\Contracts\ApiModel\Shipping as IShipping;

class Shipping extends AbstractModel implements IShipping
{
    protected $resource = "shipping/{shipping_id}";
}
