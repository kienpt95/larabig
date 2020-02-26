<?php


namespace Smartosc\LaraBig\Repository;

use Smartosc\LaraBig\Model\Store;
use Smartosc\LaraBig\Contracts\Repository\StoreRepositoryInterface;

class StoreRepository implements StoreRepositoryInterface
{

    /**
     * Save store into database
     *
     * @param array $installData
     * @return null| Store
     */
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
}
