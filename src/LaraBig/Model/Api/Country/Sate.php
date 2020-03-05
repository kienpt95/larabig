<?php


namespace Smartosc\LaraBig\Model\Api\Country;

use Smartosc\LaraBig\Contracts\ApiModel\Country\State as IState;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Sate extends AbstractModel implements IState
{
    protected $resource = "states";
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
    public function allStatesOfCountry($country_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'country_id' => $country_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function StateOfCountry($country_id, $id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'country_id' => $country_id,
            'id' => $id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function countState()
    {
        $resource = $this->getResource().'/count';
        $result = $this->service()->call('GET', $resource);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function countStateOfCountry($country_id)
    {
        $resource = $this->getResource([
            'country_id' => $country_id
        ]).'/count';
        $result = $this->service()->call('GET', $resource);
        return $result;
    }
}
