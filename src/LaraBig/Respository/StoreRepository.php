<?php


namespace Smartosc\LaraBig\Repository;

use Smartosc\LaraBig\Model\Store;
use Smartosc\LaraBig\Contracts\Repository\StoreRepositoryInterface;

class StoreRepository implements StoreRepositoryInterface
{

    /** @inheritDoc */
    public function create($installData)
    {
        /** @var Store|null $store */
        $store = Store::withTrashed()
            ->where('store_hash', $installData['store_hash'])
            ->first();

        if ($store) {
            $store = $this->restore($store);
        } else {
            $store = $this->createNew($installData);
        }
        return $store;
    }

    /** @inheritDoc */
    public function getByStoreHash($store_hash)
    {
        $store = Store::where('store_hash', $store_hash)->firstOrFail();
        return $store;
    }

    /** @inheritDoc */
    public function createNew($installData)
    {
        /** @var Store $store */
        $store = Store::firstOrNew([
            'store_hash' => $installData['store_hash']
        ]);
        $store->fill($installData);
        $store->saveOrFail();
        return $store;
    }

    /** @inheritDoc */
    public function restore($store)
    {
        $store->restore();
        return $store;
    }
}
