<?php


namespace Smartosc\LaraBig\Model\Api\Order;

use Smartosc\LaraBig\Contracts\ApiModel\Order\Shipment as IShipment;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Shipment extends AbstractModel implements IShipment
{
    protected $resource = "shipments/{shipment_id}";
    /**
     * @inheritDoc
     */
    public function all($order_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'order_id' => $order_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($order_id, $shipment_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'order_id' => $order_id,
            'shipment_id' => $shipment_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function count($order_id)
    {
       $result = $this->getResource([
           'order_id' => $order_id
       ]).'/count';
       $result = $this->service()->call('GET', $result);
       return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($order_id, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'order_id' => $order_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($order_id, $shipment_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'order_id' => $order_id,
            'shipment_id' => $shipment_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($order_id, $shipment_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'order_id' => $order_id,
            'shipment_id' => $shipment_id
        ]));
        return $result;
    }
}
