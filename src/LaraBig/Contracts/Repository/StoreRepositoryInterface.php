<?php


namespace Smartosc\LaraBig\Contracts\Repository;

use Smartosc\LaraBig\Contracts\BackendModel\StoreInterface;

interface StoreRepositoryInterface
{
    /**
     * @param  $installData
     * @return StoreInterface
     */
    public function create($installData);
}
