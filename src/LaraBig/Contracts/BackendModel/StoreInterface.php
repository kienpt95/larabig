<?php


namespace Smartosc\LaraBig\Contracts\BackendModel;

use GuzzleHttp\Exception\GuzzleException;

interface StoreInterface
{
    public function getDomain();

    public function getAccessToken();

    public function getStoreHash();

    /**
     * @return mixed
     * @throws GuzzleException
     */
    public function getInstallData();
}
