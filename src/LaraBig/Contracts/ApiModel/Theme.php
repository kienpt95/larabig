<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;


use GuzzleHttp\Exception\GuzzleException;

interface Theme
{
    const PREFIX = "themes";
    const VERSION = "v3";

    /**
     * Returns a list of store Themes.
     * GET /themes
     * @see https://developer.bigcommerce.com/api-reference/store-management/themes/themes/getstorethemes
     * @throws GuzzleException
     * @return mixed
     */
    public function  all();

    /**
     * Uploads a new Theme to your BigCommerce store.
     * POST /themes
     * @see https://developer.bigcommerce.com/api-reference/store-management/themes/themes/uploadtheme
     * @throws GuzzleException
     * @param $file
     * @return mixed
     */
    public function  upload($file);

    /**
     * Returns a store Theme. The theme variation is not available at this endpoint.
     * GET /themes/{uuid}
     * @see https://developer.bigcommerce.com/api-reference/store-management/themes/themes/getstoretheme
     * @throws GuzzleException
     * @param $uuid
     * @return mixed
     */
    public function get($uuid);

    /**
     * Deletes a store Theme. Theme variations can not be deleted using this endpoint. This will delete the theme and all variations.
     * DELETE /themes/{uuid}
     * @see https://developer.bigcommerce.com/api-reference/store-management/themes/themes/deletestoretheme
     * @throws GuzzleException
     * @param $uuid
     * @return mixed
     */
    public function delete($uuid);

    /**
     * Downloads a stores Theme
     * POST /themes/{uuid}/actions/download
     * @see https://developer.bigcommerce.com/api-reference/store-management/themes/themes/downloadtheme
     * @throws GuzzleException
     * @param $uuid
     * @return mixed
     */
    public function download($uuid);

    /**
     * Actives a store Theme.
     * This returns a 204 response upon success.
     * POST /themes/actions/activate
     * @see https://developer.bigcommerce.com/api-reference/store-management/themes/themes/activatestoretheme
     * @throws GuzzleException
     * @return mixed
     */
    public function activate();

    /**
     * Returns a theme Job. If job is completed, the result is included in the response.
     * GET /themes/jobs/{job_id}
     * @see https://developer.bigcommerce.com/api-reference/store-management/themes/themes/getjob
     * @throws GuzzleException
     * @param $job_id
     * @return mixed
     */
    public function getThemeJob($job_id);
}
