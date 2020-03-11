<?php


namespace Smartosc\LaraBig\Model\Api\Order;

use Smartosc\LaraBig\Contracts\ApiModel\Order\Product as IProduct;
use Smartosc\LaraBig\Model\Api\AbstractModel;

class Product extends AbstractModel implements IProduct
{
    protected $resource = "products/{product_id}";
    /**
     * @inheritDoc
     */
    public function all($order_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'order_id' => $order_id
        ]));
        return $result;
    }

    /**
     * @inheritDoc
     */
    public function get($order_id, $product_id)
    {
        $result = $this->service()->call('GET', $this->getResource([
            'order_id' => $order_id,
            'product_id' => $product_id
        ]));
        return $result;
    }
}
