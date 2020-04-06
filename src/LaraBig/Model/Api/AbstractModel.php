<?php

namespace Smartosc\LaraBig\Model\Api;

abstract class AbstractModel
{
    private $larabig;
    protected $resource = '';
    protected $version = 'v3';

    /**
     * @var string
     */
    protected $lastResource;

    public function __construct($larabig, $lastResource = '')
    {
        $this->larabig = $larabig;
        $this->lastResource = $lastResource;
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

    public function getResource($data = [], $version = 'v3')
    {
        $resource = empty($this->lastResource)
            ? $this->resource
            : $this->lastResource . '/' . $this->resource;

        $resource = $this->parseResource($resource, $data);
        return $version . '/' . $resource;
    }

    /**
     * @param string $resource
     * @param array $data
     * @return string
     */
    private function parseResource($resource, $data = [])
    {
        foreach ($data as $key => $value) {
            $regex = "/\{$key\}/";
            $resource = preg_replace($regex, $value, $resource);
        }
        $resource = preg_replace('/\/{+[a-zA-Z_]+}/', '', $resource);
        $resource = str_replace("//", "/", $resource);
        $resource = rtrim($resource, '/');
        return $resource;
    }

    public function __get($name)
    {
        if (property_exists($this, $name)) {
            return $this->{$name};
        }

        $className = get_class($this) . '\\' . $this->serialize($name);
        if (class_exists($className)) {
            $lastResource = empty($this->lastResource)
                ? $this->resource
                : $this->lastResource . '/' . $this->resource;

            $this->{$name} = resolve($className, [
                'larabig' => $this->larabig,
                'lastResource' => $lastResource
            ]);
            return $this->{$name};
        }
        return null;
    }
}
