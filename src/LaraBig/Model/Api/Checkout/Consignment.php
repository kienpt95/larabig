<?php


namespace Smartosc\LaraBig\Model\Api\Checkout;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Checkout\Consignment as IConsignment;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Consignment extends AbstractModel implements IConsignment
{
    protected $resource = "consignments/{consignmentId}";

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
    public function update($checkoutId, $consignmentId, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'checkoutId' => $checkoutId,
            'consignmentId' => $consignmentId
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($checkoutId, $consignmentId)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'checkoutId' => $checkoutId,
            'consignmentId' => $consignmentId
        ]));
        return $result;
    }
}
