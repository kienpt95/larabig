<?php


namespace Smartosc\LaraBig\Model;

use Smartosc\LaraBig\Contracts\BackendModel\StoreInterface;
use Smartosc\LaraBig\Exceptions\AppInstallException;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class StoreModel
 * @package Smartosc\LaraBig\Model
 */
class Store extends Model implements StoreInterface
{
    use SoftDeletes;

    protected $fillable = ['store_hash', 'access_token'];

    /**
     * @inheritDoc
     */
    public function getInstallData($code, $scope, $context)
    {
        try {
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
            } else {
                throw new \Exception
                (
                    __('Install Failed with status code :code', ['code' => $result->getStatusCode()])
                );
            }
        } catch (\Exception $e) {
            throw new AppInstallException($e->getMessage(), $e->getCode(), $e);
        }
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
