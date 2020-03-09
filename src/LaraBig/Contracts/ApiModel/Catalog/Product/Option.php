<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product;

use GuzzleHttp\Exception\GuzzleException;
use Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product\Option\Value;

/**
 * Interface Option
 * @package Smartosc\LaraBig\Contracts\ApiModel\Catalog\Product
 * @property Value value
 */
interface Option
{
    const PREFIX = "options";
    const VERSION = "v3";

    /**
     * Get a list of product Variant Options.
     * GET /catalog/products/{product_id}/options
     * @example $product_id = 80;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-options/getoptions
     * @throws GuzzleException
     * @param $product_id
     * @return mixed
     */
    public function all($product_id);

    /**
     * Get a single Variant Option.
     * GET /catalog/products/{product_id}/options/{option_id}
     * @example $product_id = 80; $option_id = 20;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-options/getoptionbyid
     * @throws GuzzleException
     * @param $product_id
     * @param $option_id
     * @return mixed
     */
    public function get($product_id, $option_id);

    /**
     * Creates a Variant Option.
     * POST /catalog/products/{product_id}/options
     * @example $product_id = 80; $data = ["product_id" => 80,
                                            "name" => "Size Rectangle",
                                            "display_name" => "Size",
                                            "type" => "rectangles",
                                            "option_values" => [
                                                [
                                                "label" => "S",
                                                "sort_order" => 0,
                                                "is_default" => false
                                                ],
                                                [
                                                "label" => "M",
                                                "sort_order" => 1,
                                                "is_default" => true
                                                ],
                                                [
                                                "label" => "L",
                                                "sort_order" => 2,
                                                "is_default" => false
                                                ]
                                            ]
     *                                  ]
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-options/createoption
     * @param $product_id
     * @param $data
     * @return mixed
     */
    public function create($product_id, $data);

    /**
     * Updates a Variant Option.
     * PUT /catalog/products/{product_id}/options/{option_id}
     * @example $product_id = 80; $option_id = 80; $data = [    "product_id" => 80,
                                                                "name" => "Size Rectangle",
                                                                "display_name" => "Size",
                                                                "type" => "rectangles",
                                                                "option_values" => [
                                                                    [
                                                                    "label" => "XS",
                                                                    "sort_order" => 0,
                                                                    "is_default" => false
                                                                    ]
                                                                ]
                                                            ]
     * @see https://developer.bigcommerce.com/api-reference/catalog/catalog-api/product-options/updateoption
     * @throws GuzzleException
     * @param $product_id
     * @param $option_id
     * @param $data
     * @return mixed
     */
    public function update($product_id, $option_id, $data);

    /**
     * Deletes a Variant Option.
     * DELETE /catalog/products/{product_id}/options/{option_id}
     * @example  $product_id = 80; $option_id = 10;
     * @see https://developer.bigcommerce.com/api-reference/store-management/catalog/product-options/deleteoptionbyid
     * @param $product_id
     * @param $data
     * @return mixed
     */

    public function delete($product_id, $option_id);
}
