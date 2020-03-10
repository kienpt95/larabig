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
        // TODO: Implement create() method.
    }

    /**
     * @inheritDoc
     */
    public function update($data)
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritDoc
     */
    public function delete($carrier_id)
    {
        // TODO: Implement delete() method.
    }
}
