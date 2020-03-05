<?php

namespace Smartosc\LaraBig\Events;

class Uninstall
{
    /**
     * @var \Smartosc\LaraBig\Model\Store|\Smartosc\LaraBig\Contracts\BackendModel\StoreInterface
     */
    private $store;

    public function __construct($store)
    {
        $this->store = $store;
    }

    /**
     * @return \Smartosc\LaraBig\Contracts\BackendModel\StoreInterface|\Smartosc\LaraBig\Model\Store
     */
    public function getStore()
    {
        return $this->store;
    }
}
