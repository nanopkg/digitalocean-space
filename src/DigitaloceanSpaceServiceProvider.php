<?php

namespace Nanopkg\DigitaloceanSpace;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Nanopkg\DigitaloceanSpace\Commands\DigitaloceanSpaceCommand;

class DigitaloceanSpaceServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('digitalocean-space')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_digitalocean-space_table')
            ->hasCommand(DigitaloceanSpaceCommand::class);
    }
}
