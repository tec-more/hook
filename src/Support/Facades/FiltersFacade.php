<?php namespace Tukecx\Base\Hook\Support\Facades;

use Illuminate\Support\Facades\Facade;
use Tukecx\Base\Hook\Support\Filters;

class FiltersFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Filters::class;
    }
}
