<?php


namespace Smartosc\LaraBig\Model\Api\Customer;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Customer\Subscriber as ISubscriber;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Subscriber extends AbstractModel implements ISubscriber
{
    protected $resource = "subscribers/{subscriber_id}";
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
    public function get($subscriber_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'subscriber_id' => $subscriber_id
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
    public function update($subscriber_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'subscriber_id' => $subscriber_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($subscriber_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'subscriber_id' => $subscriber_id
        ]));
        return $result;
    }
}
