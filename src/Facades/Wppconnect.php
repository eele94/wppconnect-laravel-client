<?php

namespace Eele94\Wppconnect\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Eele94\Wppconnect\Wppconnect
 */
class Wppconnect extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Eele94\Wppconnect\Wppconnect::class;
    }
}
