<?php

namespace jolanUK\FilamentPostcodes;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class FilamentPostcodesServiceProvider extends PackageServiceProvider
{
    public static string $name = 'filament-postcodes';

    public static string $viewNamespace = 'filament-postcodes';

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);

        $configFileName = $package->shortName();

        if (file_exists($package->basePath("/../config/$configFileName.php"))) {
            $package->hasConfigFile();
        }

        if (file_exists($package->basePath('/../resources/lang'))) {
            $package->hasTranslations();
        }

    }
}
