<?php


namespace Smartosc\LaraBig\Model\Api\Channel;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Channel\Listing as IListing;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Listing extends AbstractModel implements IListing
{
    protected $resource = "listings/{listing_id}";

    /**
     * @inheritDoc
     */
    public function all($channel_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'channel_id' => $channel_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($channel_id, $listing_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'channel_id' => $channel_id,
            'listing_id' => $listing_id
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
    public function update($channel_id, $listing_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'channel_id' => $channel_id,
            'listing_id' => $listing_id
        ]), $data);
        return $result;
    }
}
