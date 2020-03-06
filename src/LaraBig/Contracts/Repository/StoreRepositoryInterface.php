<?php


namespace Smartosc\LaraBig\Contracts\Repository;

use Smartosc\LaraBig\Contracts\BackendModel\StoreInterface;
use Smartosc\LaraBig\Model\Store;

interface StoreRepositoryInterface
{
    /**
     * @param  $installData
     * @return StoreInterface
     */
    public function create($installData);

    /**
     * @param string $store_hash
     * @return StoreInterface
     */
    public function getByStoreHash($store_hash);

    /**
     * @param $data
     * @return mixed
     */
    public function createNew($data);

    /**
     * Restore soft delete store
     * @param Store|StoreInterface $store
     * @return mixed
     */
    public function restore($store);
}
