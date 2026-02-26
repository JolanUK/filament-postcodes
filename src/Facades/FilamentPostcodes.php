<?php

namespace jolanUK\FilamentPostcodes\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \jolanUK\FilamentPostcodes\FilamentPostcodes
 */
class FilamentPostcodes extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \jolanUK\FilamentPostcodes\FilamentPostcodes::class;
    }
}
