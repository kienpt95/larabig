<?php

namespace Smartosc\LaraBig\Http\Controllers;

use Illuminate\Support\Facades\Log;
use Smartosc\LaraBig\Exceptions\AppInstallException;
use Smartosc\LaraBig\Contracts\BackendModel\StoreInterface as StoreModelInterface;
use Smartosc\LaraBig\Contracts\Repository\StoreRepositoryInterface;
use Smartosc\LaraBig\Events;
use \Smartosc\LaraBig\Http\Requests;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\View\View;
use Smartosc\LaraBig\Contracts\Repository\AdminRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LaraBigController
{
    /**
     * @var StoreModelInterface
     */
    private $storeModel;
    /**
     * @var StoreRepositoryInterface
     */
    private $storeRepository;
    /**
     * @var AdminRepositoryInterface
     */
    private $adminRepository;

    public function __construct(
        StoreModelInterface $storeModel,
        StoreRepositoryInterface $storeRepository,
        AdminRepositoryInterface $adminRepository
    ) {
        $this->storeModel = $storeModel;
        $this->storeRepository = $storeRepository;
        $this->adminRepository = $adminRepository;
    }

    /**
     * Handle load app from admin
     *
     * @param Requests\AppLoadRequest $request
     * @return ViewFactory|View
     * @see Middleware \Smartosc\LaraBig\Http\Middleware\ValidatePayload
     */
    public function load(Requests\AppLoadRequest $request)
    {
        $store = $request->input('store');

        $request->session()->put('store_hash', $store->store_hash);
        $request->session()->put('access_token', $store->access_token);

        event(new Events\LoadSuccess($request));

        return view('larabig::home');
    }

    /**
     * Handle install app
     *
     * @param Requests\AppInstallRequest $request
     * @return ViewFactory|View
     */
    public function install(Requests\AppInstallRequest $request)
    {
        try {
            $storeData = $this->storeModel
                ->getInstallData(
                    $request->code,
                    $request->scope,
                    $request->context
                );

            DB::beginTransaction();
            $store = $this->storeRepository->create($storeData);

            $userData = [
                'email' => $storeData['user']['email'],
                'bc_id' => $storeData['user']['id'],
                'store_hash' => $storeData['store_hash']
            ];
            $admin = $this->adminRepository->create($userData);

            event(new Events\AppInstall\Success($store));
            DB::commit();

            $request->session()->put('store_hash', $storeData['store_hash']);
            $request->session()->put('access_token', $storeData['access_token']);

            return view('larabig::success');
        } catch (AppInstallException $e) {
            DB::rollBack();
            event(new Events\AppInstall\Failed($e->getMessage()));
            return view('larabig::error')->withError($e->getMessage());
        } catch (\Exception $e) {
            DB::rollBack();
            event(new Events\AppInstall\Failed($e->getMessage()));
            return view('larabig::error')
                ->withError('Whoops, looks like something went wrong.');
        }
    }

    /**
     * @param $request
     * @return mixed
     */
    public function uninstall(Request $request)
    {
        try {
            /** @var \Smartosc\LaraBig\Model\Store|\Smartosc\LaraBig\Contracts\BackendModel\StoreInterface $store */
            $store = $request->input('store');
            $store->delete();
            event(new Events\Uninstall($store));
        } catch (\Exception $e) {
            return view('larabig::error')
                ->withError('Whoops, looks like something went wrong.');
        }
    }

    public function removeUser(Request $request)
    {
        #remove User only trigger on Listed App
        Log::info(json_encode($request->all()));
    }

    public function logout()
    {
        session()->flush();
        return true;
    }
}
