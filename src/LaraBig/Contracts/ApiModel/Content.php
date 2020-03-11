<?php


namespace Smartosc\LaraBig\Contracts\ApiModel;
use Smartosc\LaraBig\Contracts\ApiModel\Content\Region;
use Smartosc\LaraBig\Contracts\ApiModel\Content\Script;
use Smartosc\LaraBig\Contracts\ApiModel\Content\WidgetTemplate;

/**
 * Interface Content
 * @package Smartosc\LaraBig\Contracts\ApiModel
 * @property Region region
 * @property Script script
 * @property WidgetTemplate widget_template
 */
interface Content
{
    const PREFIX = "content";
    const VERSION = "v3";
}
