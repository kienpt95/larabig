<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Content;

interface Script
{
    const PREFIX = "scripts";
    const VERSION = "v3";

    /**
     * Returns a list of Scripts. Optional parameters can be passed in.
     * This will only return scripts that have been created by the api key and password that created the script originally.
     * GET /content/scripts
     * @see https://developer.bigcommerce.com/api-reference/storefront/content-scripts-api/scripts/getscripts
     * @return mixed
     */
    public function all();

    /**
     * Returns a single Script.
     * GET /content/scripts/{uuid}
     * @see https://developer.bigcommerce.com/api-reference/storefront/content-scripts-api/scripts/getscript
     * @param $uuid
     * @return mixed
     */
    public function get($uuid);

    /**
     * Creates a Script.
     * POST /content/scripts
     * @see https://developer.bigcommerce.com/api-reference/storefront/content-scripts-api/scripts/createscript
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Script.
     * PUT /content/scripts/{uuid}
     * @see https://developer.bigcommerce.com/api-reference/storefront/content-scripts-api/scripts/updatescript
     * @param $uuid
     * @param $data
     * @return mixed
     */
    public function update($uuid, $data);

    /**
     * Deletes a Script.
     * DELETE /content/scripts/{uuid}
     * @see https://developer.bigcommerce.com/api-reference/storefront/content-scripts-api/scripts/deletescript
     * @param $uuid
     * @return mixed
     */
    public function delete($uuid);
}
