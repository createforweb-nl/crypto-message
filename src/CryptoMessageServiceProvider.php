<?php

namespace Createforweb\CryptoMessage;

use Createforweb\CryptoMessage\Commands\CryptoMessageCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
