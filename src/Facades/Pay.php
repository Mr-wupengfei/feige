<?php

namespace Bdy\Pay\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mews\Captcha\Captcha
 */
class Pay extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'pay';
    }
}
