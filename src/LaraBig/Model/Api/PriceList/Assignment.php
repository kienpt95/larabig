<?php


namespace Smartosc\LaraBig\Model\Api\PriceList;

use Smartosc\LaraBig\Contracts\ApiModel\PriceList\Assignment as IAssignment;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Assignment extends AbstractModel implements IAssignment
{
    protected $resource = "assignments/{id}";

    /**
     * @inheritDoc
     */
    public function get()
    {
        $result = $this->service()->call('GET', $this->getResource());
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
    public function delete()
    {
        // TODO: Implement delete() method.
    }
}
