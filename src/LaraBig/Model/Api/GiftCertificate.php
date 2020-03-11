<?php


namespace Smartosc\LaraBig\Model\Api;

use Smartosc\LaraBig\Contracts\ApiModel\GiftCertificate as IGiftCertificate;

class GiftCertificate extends AbstractModel implements IGiftCertificate
{

    protected  $resource = "gift_certificates/{id}";
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
    public function create($data)
    {
        $result = $this->service()->call('POST', $this->getResource(), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'id' => $id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'id' => $id
        ]));
        return $result;
    }
}
