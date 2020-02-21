<?php

namespace Smartosc\LaraBig\Models\StoreModel;

use GuzzleHttp\Exception\GuzzleException;
use http\Client;
use Smartosc\LaraBig\Contracts\BackendModel\StoreInterface;
use Bigcommerce\Api\Connection;

class StoreModel implements StoreInterface
{
    public function getDomain()
    {
        // TODO: Implement getDomain() method.
    }

    public function getAccessToken()
    {
        // TODO: Implement getAccessToken() method.
    }

    public function getStoreHash()
    {
        // TODO: Implement getStoreHash() method.
    }

    /**
     * @inheritDoc
     */
    public function getInstallData($request)
    {
        // TODO: Implement getInstallData() method.
        try{
            $client = app('httpClient');
            $result = $client->request('POST','https://login.bigcommerce.com/oauth2/token',[
                'json'=>[
                    'client_id'=>config('larabig.client_id_key'),
                    'client_secret'=>config('larabig.secret_key'),
                    'redirect_uri' => env('APP_URL') . '/auth/install',
                    'grant_type' => 'authorization_code',
                    'code' => $request->input('code'),
                    'scope' =>$request->input('scope'),
                    'context' => $request->input('context'),
                ]
            ]);

            $statusCode = $result->getStatusCode();
            if ($statusCode == HttpResponse::HTTP_OK) {
                $data = json_decode($result->getBody(), true);
                $data['store_hash'] = str_replace('stores/', '', $data['context']);
//                $data['store_url'] = 'https://' . $this->getStoreDomain($data);
                return $data;
            }
            return null;
        }catch (GuzzleException $e) {
            event(new AppInstall\Failed($e->getMessage()));
        }
    }
}