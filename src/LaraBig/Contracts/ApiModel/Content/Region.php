<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Content;


interface Region
{
    const PREFIX = "regions";
    const VERSION = "v3";

    /**
     * Returns a list of unique Theme Regions in a file.
     * GET /content/regions
     * @see https://developer.bigcommerce.com/api-reference/storefront/widgets-api/regions/getcontentregions
     * @return mixed
     */
    public function all();
}
