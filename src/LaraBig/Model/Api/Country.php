<?php


namespace Smartosc\LaraBig\Model\Api;

use Smartosc\LaraBig\Contracts\ApiModel\Country as ICountry;

class Country extends AbstractModel implements ICountry
{
    protected $resource = "countries";

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
    public function count()
    {
        $resource = $this->getResource().'/count';
        $result = $this->service()->call('GET', $resource);
        return $result;
    }
}
