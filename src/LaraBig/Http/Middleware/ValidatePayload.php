<?php

namespace Smartosc\LaraBig\Http\Middleware;

use Closure;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Smartosc\LaraBig\Contracts\Repository\StoreRepositoryInterface;

class ValidatePayload
{
    /**
     * @var StoreRepositoryInterface
     */
    private $storeRepository;

    public function __construct(
        StoreRepositoryInterface $storeRepository
    ) {
        $this->storeRepository = $storeRepository;
    }

    public function handle(Request $request, Closure $next)
    {
        try {
            $signedPayload = $request->input('signed_payload');
            list($encodedData, $encodedSignature) = explode('.', $signedPayload, 2);

            // decode the data
            $signature = base64_decode($encodedSignature);
            $jsonStr = base64_decode($encodedData);
            $data = json_decode($jsonStr, true);

            // confirm the signature
            $expectedSignature = hash_hmac('sha256', $jsonStr, config('larabig.secret_key'));
            if (!hash_equals($expectedSignature, $signature) || empty($data['store_hash'])) {
                throw new \Exception('Bad signed request from BigCommerce!');
            }
            $store = $this->storeRepository->getByStoreHash($data['store_hash']);
            if (is_null($store)) {
                throw new ModelNotFoundException('Can\'t find store');
            }

            // add params to request
            $request->merge([
                'data' => $data,
                'store' => $store
            ]);

            return $next($request);
        } catch (\Exception $e) {
            return response('Failed to validate request', \Illuminate\Http\Response::HTTP_NOT_ACCEPTABLE);
        }
    }
}
