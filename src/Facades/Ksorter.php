<?php

namespace Maksarovd\Ksorter\Facades;

use Illuminate\Support\Facades\Facade;


class Ksorter extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ksorter';
    }
}
