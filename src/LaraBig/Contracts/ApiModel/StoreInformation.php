<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;

interface StoreInformation
{
    const PREFIX = "store";
    const VERSION =  "v3";

    /**
     * Returns metadata about a store.
     * GET /store
     * @see https://developer.bigcommerce.com/api-reference/store-management/store-information-api/store-information/getstore
     * @throws GuzzleException
     * @return mixed
     */
    public function  get();
}
