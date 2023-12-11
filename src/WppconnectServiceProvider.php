<?php

namespace Eele94\Wppconnect;

use Eele94\Wppconnect\Commands\WppconnectCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class WppconnectServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('wppconnect-client')
            ->hasConfigFile('wppconnect')
            ->hasViews()
            ->hasRoute('web')
            ->hasMigrations([
                'create_wppconnect_sessions_table',
                'create_wppconnect_webhooks_table',
            ])
            ->hasCommand(WppconnectCommand::class);
    }
}
