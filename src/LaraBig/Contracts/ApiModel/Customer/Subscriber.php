<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Customer;


interface Subscriber
{
    const PREFIX = "subcribers";
    const VERSION = "v3";

    /**
     * Returns a list of Subscribers. Optional filter parameters can be passed in.
     * GET /customers/subscribers
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/subscribers-api/subscribers/getsubscribers
     * @return mixed
     */
    public function all();

    /**
     * Returns a Subscriber.
     * GET /customers/subscribers/{subscriber_id}
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/subscribers-api/subscribers/getsubscriberbyid
     * @param $subscriber_id
     * @return mixed
     */
    public function get($subscriber_id);

    /**
     * Creates a Subscriber.
     * POST /customers/subscribers
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/subscribers-api/subscribers/createsubscriber
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Subscriber.
     * PUT /customers/subscribers/{subscriber_id}
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/subscribers-api/subscribers/updatesubscriber
     * @param $subscriber_id
     * @param $data
     * @return mixed
     */
    public function update($subscriber_id, $data);

    /**
     * Deletes a Subscriber.
     * DELETE /customers/subscribers/{subscriber_id}
     * @see https://developer.bigcommerce.com/api-reference/customer-subscribers/subscribers-api/subscribers/deletesubscriberbyid
     * @param $subscriber_id
     * @return mixed
     */
    public function delete($subscriber_id);
}