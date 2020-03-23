<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;

use Smartosc\LaraBig\Contracts\ApiModel\Shipping\Carrier;
use Smartosc\LaraBig\Contracts\ApiModel\Shipping\Zone;

/**
 * Interface Shipping
 * @package Smartosc\LaraBig\Contracts\ApiModel
 * @property Carrier carrier
 * @property Zone zone
 */
interface Shipping
{
    const PREFIX = "shipping";
    const VERSION = "v2";
}
