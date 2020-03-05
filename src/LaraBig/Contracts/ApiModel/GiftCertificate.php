<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;

/**
 * Interface GiftCertificate
 * @package Smartosc\LaraBig\Contracts\ApiModel
 */
interface GiftCertificate
{
    const PREEFIX = "gift_certificates";
    const VERSION = "v3";

    /**
     * Returns a list of Gift Certificates. Optional filter parameters can be passed in.
     * Default sorting is by gift-certificate id, from lowest to highest.
     * The maximum limit is 250. If a limit isn’t provided, up to 50 gift_certificates are returned by default.
     * GET /gift_certificates
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/gift-certificates/getallgiftcertificates
     * @return mixed
     */
    public function all();

    /**
     * Returns a single Gift Certificate.
     * GET /gift_certificates/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/gift-certificates/getagiftcertificate
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * Creates a Gift Certificate.
     * POST /gift_certificates
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/gift-certificates/createagiftcertificate
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Gift Certificate.
     * PUT /gift_certificates/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/gift-certificates/updateagiftcertificate
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data);

    /**
     * Delete a Gift Certificate.
     * DELETE /gift_certificates/{id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/gift-certificates/deleteagiftcertificate
     * @param $id
     * @return mixed
     */
    public function delete($id);
}