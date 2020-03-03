<?php


namespace Smartosc\LaraBig\Repository;

use Smartosc\LaraBig\Contracts\BackendModel\StoreInterface;
use Smartosc\LaraBig\Model\Store;
use Smartosc\LaraBig\Contracts\Repository\StoreRepositoryInterface;

class StoreRepository implements StoreRepositoryInterface
{

    /** @inheritDoc */
    public function create($installData)
    {
        #todo implement log
        $store = Store::firstOrNew([
            'store_hash' => $installData['store_hash']
        ]);
        $store->fill($installData);
        $store->saveOrFail();
        return $store;
    }

    /** @inheritDoc */
    public function getByStoreHash($store_hash)
    {
        // TODO: Implement getByStoreHash() method.
    }
}
