<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;

use GuzzleHttp\Exception\GuzzleException;

interface Currency
{
    const PREFIX = "currencies";
    const VERSION = "v2";

    /**
     * Returns a list of all store Currency.
     * GET /currencies
     * @see https://developer.bigcommerce.com/api-reference/store-management/currency-api/currencies/getcurrencies
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Returns a single Currency.
     * GET /currencies/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/currency-api/currencies/getacurrency
     * @throws GuzzleException
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * Creates Currency.
     * POST /currencies
     * @see https://developer.bigcommerce.com/api-reference/store-management/currency-api/currencies/postcurrencies
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Currency.
     * PUT /currencies/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/currency-api/currencies/updateacurrency
     * @throws GuzzleException
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data);

    /**
     * Deletes a Currency.
     * DELETE /currencies/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/currency-api/currencies/deleteacurrency
     * @throws GuzzleException
     * @param $id
     * @return mixed
     */
    public function delete($id);
}
