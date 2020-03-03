<?php


namespace Smartosc\LaraBig\Contracts\ApiModel\Banner;


interface Count
{
    const PREFIX = "count";
    const VERSION  = "v3";
    /**
     * Returns a count of Banners.
     * GET /banners/count
     * @see https://developer.bigcommerce.com/api-reference/store-management/marketing/banners/getacountofbanners
     * @return mixed
     */
    public function count();
}
