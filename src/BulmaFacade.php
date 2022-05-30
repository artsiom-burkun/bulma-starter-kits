<?php

namespace Temich\Bulma;
/**
 * This file is part of Bulma,
 * Templates for starter kit.
 *
 * @license MIT
 * @package Bulma
 */

use Illuminate\Support\Facades\Facade;

class BulmaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bulma';
    }
}
