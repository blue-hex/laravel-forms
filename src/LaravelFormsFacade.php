<?php

namespace BlueHex\LaravelForms;

use Illuminate\Support\Facades\Facade;

/**
 * @see \BlueHex\LaravelForms\Skeleton\SkeletonClass
 */
class LaravelFormsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-forms';
    }
}
