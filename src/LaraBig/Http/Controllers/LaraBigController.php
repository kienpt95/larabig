<?php

namespace Smartosc\LaraBig\Http\Controllers;

use Smartosc\LaraBig\Http\Requests\AppInstallRequest;
use Smartosc\LaraBig\Contracts\BackendModel\StoreInterface as StoreModelInterface;
use Smartosc\LaraBig\Contracts\Repository\StoreRepositoryInterface;
use Smartosc\LaraBig\Events\AppInstall;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\View\Factory as ViewFactory;
use Illuminate\View\View;

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

    public function __construct(
        StoreModelInterface $storeModel,
        StoreRepositoryInterface $storeRepository
    ) {
        $this->storeModel = $storeModel;
        $this->storeRepository = $storeRepository;
    }

    /**
     * Handle load app from admin
     */
    public function load()
    {
        //todo load app
    }

    /**
     * Handle install app
     *
     * @param  AppInstallRequest $request
     * @return ViewFactory|View
     */
    public function install(AppInstallRequest $request)
    {
        try {
            $storeData = $this->storeModel->getInstallData
            (
                $request->code,
                $request->scope,
                $request->context
            );

            if ($storeData) {
                $store = $this->storeRepository->create($storeData);

                event(new AppInstall\Success($store));

                return view('larabig::success');
            }
        } catch (GuzzleException $e) {
            event(new AppInstall\Failed($e->getMessage()));
            return view('larabig::error')->withError($e->getMessage());
        } catch (\Exception $e) {
            event(new AppInstall\Failed($e->getMessage()));
            return view('larabig::error')->withError($e->getMessage());
        }
    }

    public function uninstall()
    {
        //todo uninstall app
    }
}
