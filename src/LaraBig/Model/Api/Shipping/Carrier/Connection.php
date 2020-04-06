<?php


namespace Smartosc\LaraBig\Model\Api\Shipping\Carrier;

use Smartosc\LaraBig\Contracts\ApiModel\Shipping\Carrier\Connection as IConnection;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Connection extends AbstractModel implements IConnection
{
    protected $resource = "connection/{connection_id}";
    /**
     * @inheritDoc
     */
    public function create($data)
    {
        $result = $this->service()->call('POST', $this->getResource([], 'v2'), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($data)
    {
        $result = $this->service()->call('PUT', $this->getResource([], 'v2'), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($carrier_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'carrier_id' => $carrier_id
        ], 'v2'));
        return $result;
    }
}
