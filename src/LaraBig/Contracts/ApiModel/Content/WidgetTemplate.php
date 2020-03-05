<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Content;

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
     * @see https://developer.bigcommerce.com/api-reference/storefront/widgets-api/widget-template/getwidgettemplate
     * @param $uuid
     * @return mixed
     */
    public function get($uuid);

    /**
     * Creates a Widget Template.
     * POST /content/widget-templates
     * @see https://developer.bigcommerce.com/api-reference/storefront/widgets-api/widget-template/createwidgettemplate
     * @param $data
     * @return mixed
     */
    public function create($data);

    /**
     * Update a Widget Template.
     * PUT /content/widget-templates/{uuid}
     * @see https://developer.bigcommerce.com/api-reference/storefront/widgets-api/widget-template/updatewidgettemplate
     * @param $uuid
     * @param $data
     * @return mixed
     */
    public function update($uuid, $data);

    /**
     * Delete a Widget Template
     * DELETE /content/widget-templates/{uuid}
     * @see https://developer.bigcommerce.com/api-reference/storefront/widgets-api/widget-template/deletewidgettemplate
     * @param $uuid
     * @return mixed
     */
    public function delete($uuid);
}
