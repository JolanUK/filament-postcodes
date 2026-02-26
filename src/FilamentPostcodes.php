<?php

namespace jolanUK\FilamentPostcodes;

use Closure;
use Filament\Schemas\Components\Component;
use Filament\Support\Components\Attributes\ExposedLivewireMethod;
use Illuminate\Support\Facades\Http;

class FilamentPostcodes extends Component
{
    protected string $view = 'postcodes::postcode';

    public static function make(): static
    {
        return app(static::class);
    }
}