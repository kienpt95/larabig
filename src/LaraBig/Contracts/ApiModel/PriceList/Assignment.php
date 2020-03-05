<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\PriceList;

interface Assignment
{
    const PREFIX = "assignments";
    const VERSION = "";

    /**
     * Fetches an array of Price List Assignments matching a particular Customer Group and Price List and Channel.
     * GET /pricelists/assignments
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists-assignments/getlistofpricelistassignments
     * @return mixed
     */
    public function get();

    /**
     * Creates a batch of Price List Assignments.
     * POST /pricelists/assignments
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists-assignments/createpricelistassignments
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Deletes one or more Price List Assignments objects from BigCommerce using a filter.
     * DELETE /pricelists/assignments
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists-assignments/deletepricelistassignmentsbyfilter
     * @return mixed
     */
    public function delete();
}
