<?php

namespace Tighten\partridge-rocks;

use Illuminate\Support\Facades\Facade;

class partridge-rocksFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'larahub';
    }
}
