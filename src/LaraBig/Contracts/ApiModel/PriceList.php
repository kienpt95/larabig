<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;

use Smartosc\LaraBig\Contracts\ApiModel\PriceList\Assignment;
use Smartosc\LaraBig\Contracts\ApiModel\PriceList\Record;

/**
 * Interface PriceList
 * @package Smartosc\LaraBig\Contracts\ApiModel
 * @property Assignment assignment
 * @property Record record
 */

interface PriceList
{
    const PREFIX = "pricelists";
    const VERSION = "";
    /**
     * Get a list of Price Lists
     * GET /pricelists
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists/getpricelistcollection
     * @return mixed
     */
    public function all();

    /**
     * Get a single Price List.
     * GET /pricelists/{price_list_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists/getpricelist
     * @param $price_list_id
     * @return mixed
     */
    public function get($price_list_id);

    /**
     * Creates a Price List.
     * POST /pricelists
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists/createpricelist
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Update a price list
     * PUT /pricelists/{price_list_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists/updatepricelist
     * @param $price_list_id
     * @param $data
     * @return mixed
     */
    public function update($price_list_id, $data);

    /**
     * Deletes a Price List. All associated price records are also removed.
     * DELETE /pricelists/{price_list_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists/deletepricelist
     * @param $price_list_id
     * @return mixed
     */
    public function delete($price_list_id);
}
