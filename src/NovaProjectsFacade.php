<?php

namespace Thormaweb\NovaProjects;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Thormaweb\NovaProjects\Skeleton\SkeletonClass
 */
class NovaProjectsFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'nova-projects';
    }
}
