<?php

namespace Smartosc\LaraBig\Helper;

class LaraBig
{
    /**
     * @return bool
     */
    public static function isEnabledMultiUser()
    {
        return config('larabig.enable-multi-user', false);
    }
}
