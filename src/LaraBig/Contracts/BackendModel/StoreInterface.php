<?php


namespace Smartosc\LaraBig\Contracts\BackendModel;

/**
 * Interface StoreInterface
 *
 * @package Smartosc\LaraBig\Contracts\BackendModel
 *
 */
interface StoreInterface
{
    /**
     * @return string
     */
    public function getDomain();

    /**
     * @return string
     */
    public function getAccessToken();

    /**
     * @return string
     */
    public function getStoreHash();

    /**
     * Install app and get store data
     *
     * @param string $code
     * @param string $scope
     * @param string $context
     * @return mixed
     */
    public function getInstallData($code, $scope, $context);
}
