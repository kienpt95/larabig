<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\PriceList;

interface Record
{
    const PREFIX = "records";
    const VERSION = "";

    /**
     * Get a list of Price List Records associated with a Price List.
     * GET /pricelists/{price_list_id}/records
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists-records/getpricelistrecordcollection
     * @param $price_list_id
     * @return mixed
     */
    public function all($price_list_id);

    /**
     * Creates or updates Price List Records.
     * PUT /pricelists/{price_list_id}/records.
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists-records/setpricelistrecordcollection
     * @param $price_list_id
     * @param $data
     * @return mixed
     */
    public function upsert($price_list_id, $data);

    /**
     * Deletes a Price List Record. Deleting the records does not delete the Price List. Optional parameters can be passed in.
     * DELETE /pricelists/{price_list_id}/records
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists-records/deletepricelistrecordsbyfilter
     * @param $price_list_id
     * @return mixed
     */
    public function delete($price_list_id);

    /**
     * Returns Price List Records using the variant ID. Will also contain currency records.
     * GET /pricelists/{price_list_id}/records/{variant_id}
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists-records/getpricelistrecordsbyvariantid
     * @param $price_list_id
     * @param $variant_id
     * @return mixed
     */
    public function getByVariant($price_list_id, $variant_id);

    /**
     * Returns a Price List Record using the currency code. Optional parameters can be used.
     * GET /pricelists/{price_list_id}/records/{variant_id}/{currency_code}
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists-records/getpricelistrecord
     * @param $price_list_id
     * @param $variant_id
     * @param $currency_code
     * @return mixed
     */
    public function getByCurrentcy($price_list_id, $variant_id, $currency_code);

    /**
     * Creates or updates aPrice List Record using the currency code.
     * PUT /pricelists/{price_list_id}/records/{variant_id}/{currency_code}
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists-records/setpricelistrecord
     * @param $price_list_id
     * @param $variant_id
     * @param $currency_code
     * @param $data
     * @return mixed
     */
    public function setByCurrentcy($price_list_id, $variant_id, $currency_code, $data);

    /**
     * Deletes a Price List Record using the currency code.
     * DELETE /pricelists/{price_list_id}/records/{variant_id}/{currency_code}
     * @see https://developer.bigcommerce.com/api-reference/catalog/pricelists-api/price-lists-records/deletepricelistrecord
     * @param $price_list_id
     * @param $variant_id
     * @param $currency_code
     * @return mixed
     */
    public function deleteByCurrentcy($price_list_id, $variant_id, $currency_code);
}
