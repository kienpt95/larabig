<?php


namespace Smartosc\LaraBig\Model\Api;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\TimeZone as ITimeZone;

class TimeZone extends AbstractModel implements ITimeZone
{
    protected $resource = "time/{time_id}";

    /**
     * @inheritDoc
     */
    public function get()
    {
        $result = $this->service()->call('GET', $this->getResource());
        return $result;
    }
}
