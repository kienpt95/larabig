<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Country;

use GuzzleHttp\Exception\GuzzleException;

interface State
{
    const PREFIX = "states";
    const VERSION = "v3";

    /**
     * GET a list of all states.
     * GET /countries/states
     * @see https://developer.bigcommerce.com/api-reference/store-management/geography-api/states/getcountriesstates
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Returns a list of States belonging to a Country.
     * A state or province, identifiable by an ISO 3166 subdivision code.
     * GET /countries/{country_id}/states
     * @example @country_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/store-management/geography-api/states/getcountriescountryidstates
     * @throws GuzzleException
     * @param $country_id
     * @return mixed
     */
    public function allStatesOfCountry($country_id);

    /**
     * Returns a State. A state or province, identifiable by an ISO 3166 subdivision code.
     * GET /countries/{country_id}/states{id}
     * @example @country_id = 1; $id =5;
     * @see https://developer.bigcommerce.com/api-reference/store-management/geography-api/states/getcountriescountryidstatesid
     * @throws GuzzleException
     * @param $country_id
     * @param $id
     * @return mixed
     */
    public function StateOfCountry($country_id, $id);

    /**
     * Returns a count of all states.
     * GET /countries/states/count
     * @see https://developer.bigcommerce.com/api-reference/store-management/geography-api/states/getcountriesstatescount
     * @throws GuzzleException
     * @return mixed
     */
    public function countState();

    /**
     * Returns a count of a country’s states.
     * GET /countries/{country_id}/states/count
     * @example $country_id = 1;
     * @see https://developer.bigcommerce.com/api-reference/store-management/geography-api/states/getcountriescountryidstatescount
     * @throws GuzzleException
     * @return mixed
     */

    public function countStateOfCountry($country_id);
}
