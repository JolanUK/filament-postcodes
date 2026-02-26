<?php

namespace jolanUK\FilamentPostcodes;

use Filament\Support\Assets\Css;
use Filament\Support\Facades\FilamentAsset;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentPostcodesServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-postcodes';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name)
            ->hasViews();
    }

    public function packageBooted(): void
    {
        FilamentAsset::register([
            Css::make('postcodes', __DIR__ . '/../resources/dist/postcodes.css')->loadedOnRequest(),
        ], 'jolanuk/filament-postcodes');
    }
}