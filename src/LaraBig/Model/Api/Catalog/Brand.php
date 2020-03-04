<?php


namespace Smartosc\LaraBig\Model\Api\Catalog;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Brand as BrandInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Brand extends AbstractModel implements BrandInterface
{
    protected $resource = "brands";

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
    public function get($brand_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'brand_id'=>$brand_id
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
    public function update($brand_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'brand_id' => $brand_id
        ]),$data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($brand_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource(['brand_id' => $brand_id]));
        return $result;
    }
}
