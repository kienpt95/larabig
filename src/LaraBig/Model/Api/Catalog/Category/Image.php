<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Category;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category\Image as ImageInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Image extends AbstractModel implements ImageInterface
{
    protected $resource = "image/{image_id}";

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
    public function delete($category_id)
    {
        $result = $this->service()->call('DELETE', $this->getResource([
            'category_id' => $category_id
        ]));
        return $result;
    }
}
