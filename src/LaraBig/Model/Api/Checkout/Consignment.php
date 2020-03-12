<?php


namespace Smartosc\LaraBig\Model\Api\Checkout;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Checkout\Consignment as IConsignment;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Consignment extends AbstractModel implements IConsignment
{
    protected $resource = "consignments/{consignmen_id}";

    /**
     * @inheritDoc
     */
    public function add($checkoutId, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'checkoutId' => $checkoutId
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($checkoutId, $consignmen_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'checkoutId' => $checkoutId,
            'consignmen_id' => $consignmen_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($checkoutId, $consignmen_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'checkoutId' => $checkout_id,
            'consignmen_id' => $consignmen_id
        ]));
        return $result;
    }
}
