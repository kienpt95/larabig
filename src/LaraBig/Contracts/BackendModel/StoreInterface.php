<?php


namespace Smartosc\LaraBig\Contracts\BackendModel;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Http\Requests\AppInstallRequest;

interface StoreInterface
{
    public function getDomain();

    public function getAccessToken();

    public function getStoreHash();

    /**
     * @param $request
     * @return array
     * @throws GuzzleException
     */
    public function getInstallData($request);
}
