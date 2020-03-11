<?php


namespace Smartosc\LaraBig\Model\Api;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Channel as IChannel;

class Channel extends AbstractModel implements IChannel
{
    protected $resource = "channels/{channel_id}";

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
    public function get($channel_id)
    {
        $result = $this>$this->service()->call('GET', $this->getResource([
            'channel_id' => $channel_id
            ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($channel_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'channel_id' => $channel_id
        ]), $data);
        return $result;
    }
}
