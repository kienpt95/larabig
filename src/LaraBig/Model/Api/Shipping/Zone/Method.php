<?php


namespace Smartosc\LaraBig\Model\Api\Shipping\Zone;

use Smartosc\LaraBig\Contracts\ApiModel\Shipping\Zone\Method as IMethod;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Method extends AbstractModel implements IMethod
{
    protected $resource = "methods/{method_id}";
    /**
     * @inheritDoc
     */
    public function all($zone_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'zone_id' => $zone_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($zone_id, $method_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'zone_id' => $zone_id,
            'method_id' => $method_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($zone_id, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'zone_id' => $zone_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($zone_id, $method_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'zone_id' => $zone_id,
            'method_id' => $method_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($zone_id, $method_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'zone_id' => $zone_id,
            'method_id' => $method_id
        ]));
        return $result;
    }
}
