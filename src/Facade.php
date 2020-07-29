<?php

namespace TsiHosting\LaraCart;

use Illuminate\Support\Facades\Facade as LaravelFacade;

/**
 * Laraval Facade
 *
 * Class Facade
 * @package TsiHosting\LaraCart
 */
class Facade extends LaravelFacade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return Cart::class;
    }
}