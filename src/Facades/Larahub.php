<?php

namespace PartridgeRocks\Larahub\Facades;

use Illuminate\Support\Facades\Facade;

class Larahub extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'larahub';
    }
}
