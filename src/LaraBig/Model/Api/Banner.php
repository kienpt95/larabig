<?php


namespace Smartosc\LaraBig\Model\Api;

use Smartosc\LaraBig\Contracts\ApiModel\Banner as BannerInterface;

class Banner extends AbstractModel implements BannerInterface
{
    protected $resource = "banners/{id}";
    /**
     * @inheritDoc
     */
    public function all()
    {
        $result = $this->service()->call('GET', $this->getResource([], 'v2'));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'id'=>$id
        ], 'v2'));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($data)
    {
        $result = $this->service()->call('POST', $this->getResource([], 'v2'), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'id' => $id
        ], 'v2'), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'id' => $id
        ], 'v2'));
        return $result;
    }

    public function count()
    {
        $resource = $this->getResource([], 'v2').'/count';
        $result = $this->service()->call('GET', $resource);
        return $result;
    }
}
