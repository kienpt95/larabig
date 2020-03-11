<?php


namespace Smartosc\LaraBig\Model\Api\Shipping;

use Smartosc\LaraBig\Contracts\ApiModel\Shipping\Zone as IZone;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Zone extends AbstractModel implements IZone
{
    protected $resource = "/zones/{zone_id}";

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
    public function get($zone_id)
    {
        $result = $this->service()->call('GET',  $this->getResource([
            'zone_id' => $zone_id
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
    public function update($zone_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'zone_id' => $zone_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($zone_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'zone_id' => $zone_id
        ]));
        return $result;
    }
}
