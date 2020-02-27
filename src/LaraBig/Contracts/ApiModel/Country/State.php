<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Country;


interface State
{
    const PREFIX = "states";
    const VERSION = "v3";

    /**
     * GET a list of all states.
     * GET /countries/states
     * @see https://developer.bigcommerce.com/api-reference/store-management/geography-api/states/getcountriesstates
     * @return mixed
     */
    public function all();

    /**
     * Returns a list of States belonging to a Country.
     * A state or province, identifiable by an ISO 3166 subdivision code.
     * GET /countries/{country_id}/states
     * @see https://developer.bigcommerce.com/api-reference/store-management/geography-api/states/getcountriescountryidstates
     * @param $country_id
     * @return mixed
     */
    public function allStatesOfCountry($country_id);

    /**
     * Returns a State. A state or province, identifiable by an ISO 3166 subdivision code.
     * GET /countries/{country_id}/states{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/geography-api/states/getcountriescountryidstatesid
     * @param $country_id
     * @param $id
     * @return mixed
     */
    public function StateOfCountry($country_id, $id);

    /**
     * Returns a count of all states.
     * GET /countries/states/count
     * @see https://developer.bigcommerce.com/api-reference/store-management/geography-api/states/getcountriesstatescount
     * @return mixed
     */
    public function countState();

    /**
     * Returns a count of a country’s states.
     * GET /countries/{country_id}/states/count
     * @see https://developer.bigcommerce.com/api-reference/store-management/geography-api/states/getcountriescountryidstatescount
     * @return mixed
     */

    public function countStateOfCountry();
}