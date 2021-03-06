<?php

namespace Statamic\Facades;

use Illuminate\Support\Facades\Facade;
use Statamic\Imaging\Manager;

/**
 * @method static string|\Statamic\Contracts\Imaging\ImageManipulator manipulate($item = null, $params = null)
 * @method static \Statamic\Contracts\Imaging\ImageManipulator manipulator()
 * @method static array getCpImageManipulationPresets()
 *
 * @see \Statamic\Imaging\Manager
 */
class Image extends Facade
{
    protected static function getFacadeAccessor()
    {
        return Manager::class;
    }
}
