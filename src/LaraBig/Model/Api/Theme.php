<?php


namespace Smartosc\LaraBig\Model\Api\Shipping;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Theme as ITheme;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Theme extends AbstractModel implements ITheme
{
    protected $resource = "themes/{uuid}";
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
    public function upload($file)
    {
        // TODO: Implement upload() method.
    }

    /**
     * @inheritDoc
     */
    public function get($uuid)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'uuid' => $uuid
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($uuid)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'uuid' => $uuid
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function download($uuid)
    {
        // TODO: Implement download() method.
    }

    /**
     * @inheritDoc
     */
    public function activate()
    {
        // TODO: Implement activate() method.
    }

    /**
     * @inheritDoc
     */
    public function getThemeJob($job_id)
    {
        $resource = $this->getResource().'/jobs'.'/'.$job_id;
        $result = $this->service()->call('GET', $resource);
        return $result;
    }
}
