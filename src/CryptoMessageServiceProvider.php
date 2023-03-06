<?php

namespace Createforweb\CryptoMessage;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Createforweb\CryptoMessage\Commands\CryptoMessageCommand;

class CryptoMessageServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('crypto-message')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_crypto-message_table')
            ->hasCommand(CryptoMessageCommand::class);
    }
}
