<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Content;

use GuzzleHttp\Exception\GuzzleException;

interface WidgetTemplate
{
    const PREFIX =  "widget-templates";
    const VERSION = "v3";

    /**
     * Returns a list of Widget Templates.
     * GET /content/widget-templates
     * @see https://developer.bigcommerce.com/api-reference/storefront/widgets-api/widget-template/getwidgettemplates
     * @return mixed
     */
    public function all();

    /**
     * Return a single Widget Template.
     * GET /content/widget-templates/{uuid}
     * @example $uuid = '2ff24732-6848-47ba-9a7f-c8b1d444f270';
     * @see https://developer.bigcommerce.com/api-reference/storefront/widgets-api/widget-template/getwidgettemplate
     * @throws GuzzleException
     * @param $uuid
     * @return mixed
     */
    public function get($uuid);

    /**
     * Creates a Widget Template.
     * POST /content/widget-templates
     * @example $data = [
                                "name"=> "Header Images",
                                "template"=> "{{#each images}}<a href='{{image_url}}'><img src={{image_source}} style='width:33.3%'/></a>{{/each}}"
                                ];
     * @see https://developer.bigcommerce.com/api-reference/storefront/widgets-api/widget-template/createwidgettemplate
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Update a Widget Template.
     * PUT /content/widget-templates/{uuid}
     * @example $uuid = '002482c1-ce58-4510-8ce7-a101d52aeb33'; $data = [
                                                                        "name"=> "Header Images",
                                                                        "template"=> "{{#each images}}<a href='{{image_url}}'><img src={{image_source}} style='width:33.3%'/></a>{{/each}}"
                                                                        ];
     * @see https://developer.bigcommerce.com/api-reference/storefront/widgets-api/widget-template/updatewidgettemplate
     * @throws GuzzleException
     * @param $uuid
     * @param $data
     * @return mixed
     */
    public function update($uuid, $data);

    /**
     * Delete a Widget Template
     * DELETE /content/widget-templates/{uuid}
     * @example $uuid = '002482c1-ce58-4510-8ce7-a101d52aeb33';
     * @see https://developer.bigcommerce.com/api-reference/storefront/widgets-api/widget-template/deletewidgettemplate
     * @throws GuzzleException
     * @param $uuid
     * @return mixed
     */
    public function delete($uuid);
}
