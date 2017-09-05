<?php namespace Tukecx\Base\Hook\Support\Facades;

use Illuminate\Support\Facades\Facade;
use Tukecx\Base\Hook\Support\Actions;

class ActionsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Actions::class;
    }
}
