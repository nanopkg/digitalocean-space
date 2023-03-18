<?php

namespace Nanopkg\DigitaloceanSpace\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nanopkg\DigitaloceanSpace\DigitaloceanSpace
 */
class DigitaloceanSpace extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Nanopkg\DigitaloceanSpace\DigitaloceanSpace::class;
    }
}
