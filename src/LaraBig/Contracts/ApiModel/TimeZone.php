<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;

interface TimeZone
{
    const PREFIX = "time";
    const VERSION = "v3";

    /**
     * Returns the system timestamp at the time of the request. The time resource is useful for validating API authentication details and testing client connections.
     * GET /time
     * @see https://developer.bigcommerce.com/api-reference/store-management/store-information-api/time-zone/gettime
     * @return mixed
     * @throws GuzzleException
     */
    public function get();
}
