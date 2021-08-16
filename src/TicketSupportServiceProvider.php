<?php

namespace Codever\TicketSupport;

use Codever\TicketSupport\Commands\TicketSupportCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TicketSupportServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('ticket-support')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_ticket-support_table')
            ->hasCommand(TicketSupportCommand::class);
    }
}
