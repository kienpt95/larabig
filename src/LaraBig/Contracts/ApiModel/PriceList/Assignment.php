<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\PriceList;

use GuzzleHttp\Exception\GuzzleException;

interface Assignment
{
    const PREFIX = "assignments";
    const VERSION = "";

    /**
     * Fetches an array of Price List Assignments matching a particular Customer Group and Price List and Channel.
     * GET /pricelists/assignments
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists-assignments/getlistofpricelistassignments
     * @throws GuzzleException
     * @return mixed
     */
    public function get();

    /**
     * Creates a batch of Price List Assignments.
     * POST /pricelists/assignments
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists-assignments/createpricelistassignments
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Deletes one or more Price List Assignments objects from BigCommerce using a filter.
     * DELETE /pricelists/assignments
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists-assignments/deletepricelistassignmentsbyfilter
     * @throws GuzzleException
     * @return mixed
     */
    public function delete();
}
