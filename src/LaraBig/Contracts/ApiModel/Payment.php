<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;
use Smartosc\LaraBig\Contracts\ApiModel\Payment\AccessToken;
use Smartosc\LaraBig\Contracts\ApiModel\Payment\Method;

/**
 * Interface Payment
 * @package Smartosc\LaraBig\Contracts\ApiModel
 * @property AccessToken access_token
 * @property Method method
 */
interface Payment
{
    const PREFIX = "payments";
    const VERIOSN = "";
}
