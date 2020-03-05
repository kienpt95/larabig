<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;

interface Currency
{
    const PREFIX = "currencies";
    const VERSION = "v2";

    /**
     * Returns a list of all store Currency.
     * GET /currencies
     * @see https://developer.bigcommerce.com/api-reference/store-management/currency-api/currencies/getcurrencies
     * @return mixed
     */
    public function all();

    /**
     * Returns a single Currency.
     * GET /currencies/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/currency-api/currencies/getacurrency
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * Creates Currency.
     * POST /currencies
     * @see https://developer.bigcommerce.com/api-reference/store-management/currency-api/currencies/postcurrencies
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Currency.
     * PUT /currencies/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/currency-api/currencies/updateacurrency
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data);

    /**
     * Deletes a Currency.
     * DELETE /currencies/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/currency-api/currencies/deleteacurrency
     * @param $id
     * @return mixed
     */
    public function delete($id);
}
