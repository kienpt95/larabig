<?php


namespace Smartosc\LaraBig\Model\Api\Catalog\Category;

use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Category\Tree as TreeInterface;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Tree extends AbstractModel implements TreeInterface
{
    protected $resource = "tree";
    /**
     * @inheritDoc
     */
    public function get()
    {
        $result = $this->service()->call('GET', $this->getResource());
        return $result;
    }
}
