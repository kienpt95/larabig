<?php


namespace Smartosc\LaraBig\Model\Api;

use Smartosc\LaraBig\Contracts\ApiModel\Content as IContent;

class Content extends AbstractModel implements IContent
{
    protected $resource = "content/{content_id}";
}
