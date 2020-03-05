<?php


namespace Smartosc\LaraBig\Model\Api\Content;

use Smartosc\LaraBig\Contracts\ApiModel\Content\Script as IScript;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Script extends AbstractModel implements IScript
{
    protected $resource = "scripts";

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
    public function create($data)
    {
        $result = $this->service()->call('POST', $this->getResource(), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($uuid, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'uuid' => $uuid
        ]), $data);
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
}
