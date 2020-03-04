<?php


namespace Smartosc\LaraBig\Contracts\BackendModel;

use Smartosc\LaraBig\Exceptions\AppInstallException;

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
     * @return array
     * @throws AppInstallException
     */
    public function getInstallData($code, $scope, $context);
}
