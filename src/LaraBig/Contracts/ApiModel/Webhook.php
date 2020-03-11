<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;

interface Webhook
{
    const PREFIX = "webhooks";
    const VERSION = "v3";

    /**
     * Returns a list of all webhooks on a store associated to the client_id used to authenticate the request.
     * GET /hooks
     * @see https://developer.bigcommerce.com/api-reference/webhooks/webhooks/getallwebhooks
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Return a webhook by ID.
     * GET /hooks/{id}
     * @see https://developer.bigcommerce.com/api-reference/webhooks/webhooks/getwebhook
     * @throws GuzzleException
     * @param $id
     * @return mixed
     */
    public function get($id);

    /**
     * Creates a webhook. Only one webhook at a time can be created. Custom headers can be added.
     * POST /hooks
     * @see https://developer.bigcommerce.com/api-reference/webhooks/webhooks/createwebhooks
     * @throws GuzzleException
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a webhook. Custom headers can be added.
     * PUT /hoooks/{id}
     * @see https://developer.bigcommerce.com/api-reference/webhooks/webhooks/updateawebhook
     * @throws GuzzleException
     * @param $id
     * @param $data
     * @return mixed
     */
    public function update($id, $data);

    /**
     * Deletes a webhook. Only one webhook at a time can be deleted. When a webhook is deleted, it is returned in the response as a 200 OK.
     * DELETE /hooks/{id}
     * @see https://developer.bigcommerce.com/api-reference/webhooks/webhooks/deleteawebhook
     * @param $id
     * @return mixed
     */
    public function delete($id);
}
