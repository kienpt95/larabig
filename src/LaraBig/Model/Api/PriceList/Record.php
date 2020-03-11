<?php


namespace Smartosc\LaraBig\Model\Api\PriceList;

use Smartosc\LaraBig\Contracts\ApiModel\PriceList\Record as IRecord;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Record extends AbstractModel implements IRecord
{
    protected $resource = "records/{variant_id}";

    /**
     * @inheritDoc
     */
    public function all($price_list_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'price_list_id' => $price_list_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function upsert($price_list_id, $data)
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

    /**
     * @inheritDoc
     */
    public function getByVariant($price_list_id, $variant_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'price_list_id' => $price_list_id,
            'variant_id' => $variant_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function getByCurrentcy($price_list_id, $variant_id, $currency_code)
    {
        $resource = $this->getResource([
            'price_list_id' => $price_list_id,
            'variant_id' => $variant_id
        ]).'/'.$currency_code;
        $result = $this->service()->call('GET', $resource);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function setByCurrentcy($price_list_id, $variant_id, $currency_code, $data)
    {
        $resource = $this->getResource([
                'price_list_id' => $price_list_id,
                'variant_id' => $variant_id
            ]).'/'.$currency_code;
        $result = $this->service()->call('PUT', $resource, $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function deleteByCurrentcy($price_list_id, $variant_id, $currency_code)
    {
        $resource = $this->getResource([
                'price_list_id' => $price_list_id,
                'variant_id' => $variant_id
            ]).'/'.$currency_code;
        $result = $this->service()->call('DELETE', $resource);
        return $result;
    }
}
