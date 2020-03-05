<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Category;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category\Metafield as MetafieldInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;


class Metafield extends  AbstractModel implements  MetafieldInterface
{
    protected $resource = "{category_id}/metafields";
    /**
     * @inheritDoc
     */
    public function all($category_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'category_id' => $category_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($category_id, $metafield_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'category_id'=>$category_id
            ,'metafield_id'=>$metafield_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function create($category_id, $data)
    {
        $result = $this->service()->call('POST', $this->getResource([
            'category_id' => $category_id
        ]), $data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function update($category_id, $metafield_id, $data)
    {
        $result = $this->service()->call('PUT', $this->getResource([
            'category_id' => $category_id,
            'metafield_id' => $metafield_id
        ]) ,$data);
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function delete($category_id, $metafield_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'category_id' => $category_id,
            'metafield_id' => $metafield_id
        ]));
        return $result;
    }
}
