<?php


namespace Smartosc\LaraBig\Model\Api\Site;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Site\Route as IRoute;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Route extends AbstractModel implements IRoute
{
    protected $resource = "routes/{route_id}";

    /**
     * @inheritDoc
     */
    public function all($site_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'site_id' => $site_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($site_id, $route_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'site_id' => $site_id,
            'route_id' => $route_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($site_id, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'site_id' => $site_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($site_id, $route_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'site_id' => $site_id,
            'route_id' => $route_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($site_id, $route_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'site_id' => $site_id,
            'route_id' => $route_id
        ]));
        return $result;
    }
}
