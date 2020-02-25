<?php


namespace Smartosc\LaraBig\Model;

use GuzzleHttp\Exception\GuzzleException;
use http\Client;
use Smartosc\LaraBig\Contracts\BackendModel\StoreInterface;
use Bigcommerce\Api\Connection;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StoreModel
 * @package Smartosc\LaraBig\Model
 * @method getDomain
 * @method getAccessToken
 * @method getStoreHash
 */
class StoreModel extends Model implements StoreInterface
{
    /**
     * @inheritDoc
     */
    public function getInstallData($code, $scope, $context)
    {
        /** @var \GuzzleHttp\Client $client */
        $client = app('httpClient');
        $result = $client->request(
            'POST',
            config('larabig.url_request_token'),
            [
                'json' => [
                    'client_id' => config('larabig.client_id_key'),
                    'client_secret' => config('larabig.secret_key'),
                    'redirect_uri' => env('APP_URL') . '/auth/install',
                    'grant_type' => 'authorization_code',
                    'code' => $code,
                    'scope' => $scope,
                    'context' => $context,
                ]
            ]
        );

        if ($result->getStatusCode() == Response::HTTP_OK) {
            $data = json_decode($result->getBody(), true);
            $data['store_hash'] = str_replace('stores/', '', $data['context']);
            // @todo get store domain
            return $data;
        }
        return null;
    }

}
