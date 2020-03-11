<?php


namespace Smartosc\LaraBig\Model\Api;

use Smartosc\LaraBig\Contracts\ApiModel\CustomerGroup as ICustomerGroup;

class CustomerGroup extends AbstractModel implements ICustomerGroup
{
    protected $resource = "customer_groups/{customer_group_id}";
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
    public function get($customer_group_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'customer_group_id' => $customer_group_id
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
    public function update($customer_group_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'customer_group_id' => $customer_group_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($customer_group_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'customer_group_id' => $customer_group_id
        ]));
        return $result;
    }
}
