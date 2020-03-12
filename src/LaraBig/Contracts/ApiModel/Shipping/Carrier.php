<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Shipping;
use Smartosc\LaraBig\Contracts\ApiModel\Shipping\Carrier\Connection;

/**
 * Interface Carrier
 * @package Smartosc\LaraBig\Contracts\ApiModel\Shipping
 * @property Connection connection
 */
interface Carrier
{
    const PREFIX = "carrier";
    const VERSION = "v2";
}
