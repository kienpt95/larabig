<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Content;

use GuzzleHttp\Exception\GuzzleException;

interface Script
{
    const PREFIX = "scripts";
    const VERSION = "v3";

    /**
     * Returns a list of Scripts. Optional parameters can be passed in.
     * This will only return scripts that have been created by the api key and password that created the script originally.
     * GET /content/scripts
     * @see https://developer.bigcommerce.com/api-reference/storefront/content-scripts-api/scripts/getscripts
     * @throws GuzzleException
     * @return mixed
     */
    public function all();

    /**
     * Returns a single Script.
     * GET /content/scripts/{uuid}
     * @example $uuid = 1;
     * @see https://developer.bigcommerce.com/api-reference/storefront/content-scripts-api/scripts/getscript
     * @throws GuzzleException
     * @param $uuid
     * @return mixed
     */
    public function get($uuid);

    /**
     * Creates a Script.
     * POST /content/scripts
     * @example $data = [
                        "name"=> "Bootstrap",
                        "description"=> "Build responsive websites",
                        "html"=> "<script src=\\\"https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js\\\"></script>",
                        "src"=> "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js",
                        "auto_uninstall"=> true,
                        "load_method"=> "default",
                        "location"=> "footer",
                        "visibility"=> "all_pages",
                        "kind" => "src",
                        "consent_category" => "essential"
                        ];
     * @see https://developer.bigcommerce.com/api-reference/storefront/content-scripts-api/scripts/createscript
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Updates a Script.
     * PUT /content/scripts/{uuid}
     * @example $uuid = 1; $data = [
                                    "description"=> "Responsive websites",
                                    ];
     * @see https://developer.bigcommerce.com/api-reference/storefront/content-scripts-api/scripts/updatescript
     * @throws GuzzleException
     * @param $uuid
     * @param $data
     * @return mixed
     */
    public function update($uuid, $data);

    /**
     * Deletes a Script.
     * DELETE /content/scripts/{uuid}
     * @example $uuid 1;
     * @see https://developer.bigcommerce.com/api-reference/storefront/content-scripts-api/scripts/deletescript
     * @param $uuid
     * @return mixed
     */
    public function delete($uuid);
}
