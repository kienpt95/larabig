<?php

namespace Smartosc\LaraBig\Model\Api;

abstract class AbstractModel
{
    private $larabig;
    const CLASS_PREFIX = 'Smartosc\LaraBig\Contracts\ApiModel\\';
    protected $resource = '';
    /**
     * @var string
     */
    protected $prefixResource;

    public function __construct($larabig, $prefixResource = '')
    {
        $this->larabig = $larabig;
        $this->prefixResource = empty($prefixResource) ? $this->resource : $prefixResource;
    }

    private function serialize($name)
    {
        return str_replace("_", "", ucwords($name, "_"));
    }

    /**
     * @return \Smartosc\LaraBig\LaraBig
     */
    public function service()
    {
        return $this->larabig;
    }

    public function getResource()
    {
        return empty($this->prefixResource)
            ? $this->resource
            : $this->prefixResource . '/' .$this->resource;
    }


    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->{$name};
        }

        $classSuffix = $this->serialize($this->resource) . '\\' . $this->serialize($name);

        $className = self::CLASS_PREFIX . $classSuffix;
        $this->{$name} = resolve($className, [
            'larabig' => $this->larabig,
            'prefixResource' => $this->resource
        ]);
        return $this->{$name};

        return null;
    }
}
