<?php

namespace Smartosc\LaraBig\Model\Api\Catalog\Product;

use Smartosc\LaraBig\Model\Api\AbstractModel;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Image as ImageInterface;

class Image  extends AbstractModel implements ImageInterface
{
    protected $resource = "{product_id}/images";

    /** @inheritDoc */
    public function all($product_id)
    {
        $result = $this->service()->call('GET', $this->getResource(
            [
                'product_id' => $product_id
            ])
        );
        return $result;
    }

    /**
     * Get a single Product Image
     * GET /catalog/products/{product_id}/images/{image_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/getproductimagebyid
     * @param $product_id
     * @param $image_id
     * @return mixed
     */
    public function get($product_id, $image_id)
    {
        // TODO: Implement get() method.
    }

    /**
     * Creates a Product Image.
     * POST /catalog/products/{product_id}/images
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/createproductimage
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $data)
    {
        // TODO: Implement create() method.
    }

    /**
     * Updates a Product Image
     * PUT /catalog/products/{product_id}/images/{image_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/updateproductimage
     * @param $product_id
     * @param $image_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $image_id, $data)
    {
        // TODO: Implement update() method.
    }

    /**
     * Deletes a Product Image.
     * DELETE /catalog/products/{product_id}/images/{image_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-images/deleteproductimage
     * @param $product_id
     * @param $image_id
     * @return mixed
     */
    public function delete($product_id, $image_id)
    {
        // TODO: Implement delete() method.
    }
}
