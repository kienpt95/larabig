<?php


namespace Smartosc\LaraBig\Model\Api;

use Smartosc\LaraBig\Contracts\ApiModel\PriceList as IPriceList;

class PriceList extends AbstractModel implements IPriceList
{
    protected $resource = "pricelists/{price_list_id}";

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
    public function get($price_list_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'price_list_id' => $price_list_id
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
    public function update($price_list_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'price_list_id' => $price_list_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($price_list_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'price_list_id' => $price_list_id
        ]));
        return $result;
    }
}
