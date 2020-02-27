<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Geography;

use Smartosc\LaraBig\Contracts\ApiModel\Country\State;

/**
 * Interface Country
 * @package Smartosc\LaraBig\Contracts\ApiModel\Geography
 * @property State state
 */
interface Country
{
    const PREFIX = 'countries';
    const VERSION = 'v3';

    /**
     * Get a list of all countries available. A country or territory, identifiable by an ISO 3166 country code.
     * GET /countries
     * @see https://developer.bigcommerce.com/api-reference/store-management/geography-api/countries/getcountries
     * @return mixed
     */
    public function all();

    /**
     * Returns a single Country.
     * GET /countries/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/geography-api/countries/getcountriesid
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * Returns a count of all countries.
     * GET /countries/count
     * @see https://developer.bigcommerce.com/api-reference/store-management/geography-api/countries/countriescount
     * @return mixed
     */
    public function count();


}