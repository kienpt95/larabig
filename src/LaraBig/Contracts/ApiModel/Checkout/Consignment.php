<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Checkout;


use GuzzleHttp\Exception\GuzzleException;

interface Consignment
{
    const PREFIX = "consignments";
    const VERSION = "v3";

    /**
     * Adds a new Consignment to Checkout.
     * POST /checkouts/{checkoutId}/consignments
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-checkout-api/checkout-consignments/checkoutsconsignmentsbycheckoutidpost
     * @throws GuzzleException
     * @param $checkoutId
     * @param $data
     * @return mixed
     */
    public function add($checkoutId, $data);

    /**
     * Updates an existing consignment. Shipping address, line item IDs or the shipping option ID can be updated using this endpoint.
     * PUT /checkouts/{checkoutId}/consignments/{consignmentId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-checkout-api/checkout-consignments/checkoutsconsignmentsbycheckoutidandconsignmentidput
     * @throws GuzzleException
     * @param $checkoutId
     * @param $consignmentId
     * @param $data
     * @return mixed
     */
    public function update($checkoutId, $consignmentId, $data);

    /**
     * Removes an existing consignment from checkout.
     * DELETE /checkouts/{checkoutId}/consignments/{consignmentId}
     * @see https://developer.bigcommerce.com/api-reference/cart-checkout/server-server-checkout-api/checkout-consignments/checkoutsconsignmentsbycheckoutidandconsignmentiddelete
     * @throws GuzzleException
     * @param $checkoutId
     * @param $consignmentId
     * @return mixed
     */
    public function delete($checkoutId, $consignmentId);
}
