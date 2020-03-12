<?php


namespace Smartosc\LaraBig\Model\Api;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Webhook as IWebhook;

class Webhook extends AbstractModel implements IWebhook
{
    protected $resource = "hooks/{id}";

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
    public function get($id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'id' => $id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($data)
    {
        $result = $this->service()->call('POST',  $this->getResource(), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'id' => $id
        ]), $data);
        return $data;
    }

    /**
     * @inheritDoc
     */
    public function delete($id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'id' => $id
        ]));
        return $result;
    }
}
