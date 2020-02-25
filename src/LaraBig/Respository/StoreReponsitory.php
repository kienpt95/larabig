<?php


namespace Smartosc\LaraBig\Repository;


use Cassandra\Exception;
use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\BackendModel\StoreInterface;
use Smartosc\LaraBig\Contracts\Repository\StoreRepositoryInterface;

class StoreRepository implements StoreRepositoryInterface
{

    /**
     * Create new object
     * @param $data
     * @return boolean
     * @throws Throwable
     */
    public function create($installData)
    {
        // TODO: Implement create() method.
        try{
            $shop = Shop::firstOrNew([
                'store_hash'=>$installData['store_hash']
            ]);
            $shop->fill($installData);
            $shop->saveOrFail();
            return $shop;
        }catch (Exception $e){
            return false;
        }
    }
}
