<?php


namespace Smartosc\LaraBig\Model\Api;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Site as ISite;

class Site extends AbstractModel implements ISite
{
    protected $resource = "sites/{site_id}";

    /**
     * @inheritDoc
     */
    public function all()
    {
        $result = $this->service()->call('GET', $this->getResource());
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($site_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'site_id' => $site_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($data)
    {
        $result = $this->service()->call('POST', $this->getResource(), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($site_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'site_id' => $site_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($site_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'site_id' => $site_id
        ]));
        return $result;
    }
}
