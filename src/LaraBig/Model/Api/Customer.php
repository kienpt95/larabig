<?php


namespace Smartosc\LaraBig\Model\Api;

use Smartosc\LaraBig\Contracts\ApiModel\Customer as Icustomer;

class Customer extends AbstractModel implements Icustomer
{
    protected $resource = "customers/{customer_id}";

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
    public function create($data)
    {

        $result = $this->service()->call('POST', $this->getResource(), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($data)
    {
        $result = $this->service()->call('PUT', $this->getResource(), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($ids)
    {
        $result = $this->service()->call('DELETE', $this->getResource(), null, [
            'id:in' => implode(",", $ids)
        ]);
        return $result;
    }
}
