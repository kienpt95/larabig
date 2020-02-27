<?php


namespace Smartosc\LaraBig\Model;

use Smartosc\LaraBig\Contracts\BackendModel\StoreInterface;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\Eloquent\Model;

/**
 * Class StoreModel
 * @package Smartosc\LaraBig\Model
 */
class Store extends Model implements StoreInterface
{
    protected $fillable = ['store_hash', 'access_token'];

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
                    'client_id' => config('larabig.client_id'),
                    'client_secret' => config('larabig.secret_key'),
                    'redirect_uri' => config('app.url') . '/' . config('larabig.prefix') .'/install',
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

    /** @inheritDoc */
    public function getDomain()
    {
        return $this->domain;
    }

    /** @inheritDoc */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /** @inheritDoc */
    public function getStoreHash()
    {
        return $this->store_hash;
    }
}
