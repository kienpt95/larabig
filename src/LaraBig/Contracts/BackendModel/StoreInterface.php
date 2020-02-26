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
     * Install app and get store data
     *
     * @param string $code
     * @param string $scope
     * @param string $context
     * @return mixed
     */
    public function getInstallData($code, $scope, $context);
}
