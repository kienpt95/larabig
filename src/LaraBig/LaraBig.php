<?php

namespace Smartosc\LaraBig;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog;
use Smartosc\LaraBig\Contracts\BackendModel\StoreInterface;

/**
 * Class LaraBig
 * @package Smartosc\LaraBig
 * @property Catalog catalog
 */
class LaraBig
{
    private static $allowMethods = ['POST', 'PUT', 'PATCH', 'GET', 'DELETE', 'HEAD'];


    /**
     * @var \GuzzleHttp\Client
     */
    protected $httpClient;

    /**
     * @var StoreInterface
     */
    private $store;

    /**
     * AbstractClient constructor.
     */
    public function __construct()
    {
        $this->httpClient = app('httpClient');
    }

    /**
     * @return StoreInterface
     */
    public function getStore(): StoreInterface
    {
        return $this->store;
    }

    /**
     * @param StoreInterface $store
     * @return LaraBig
     */
    public function setStore(StoreInterface $store) : LaraBig
    {
        $this->store = $store;
        return $this;
    }

    public function call($method, $resource, $data = null, $parameters = null)
    {
        return $resource;
        // TODO: make call request
    }

    # LaraBig->catalog->product->all()
    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->{$name};
        }
        $namespace = str_replace("_", "", ucwords($name, "_"));
        $className = 'Smartosc\LaraBig\Contracts\ApiModel\\' . $namespace;
        $this->{$name} = resolve($className, ['larabig' => $this]);
        return $this->{$name};
    }
}
