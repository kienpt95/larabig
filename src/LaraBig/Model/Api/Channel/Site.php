<?php


namespace Smartosc\LaraBig\Model\Api\Channel;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Channel\Site as ISite;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Site extends AbstractModel implements ISite
{
    protected $resource = "site/{site_id}";
    /**
     * @inheritDoc
     */
    public function get($channel_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'channel_id' => $channel_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($channel_id, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'channel_id' => $channel_id
        ]), $data);
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
