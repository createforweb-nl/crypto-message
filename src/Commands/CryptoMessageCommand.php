<?php

namespace Createforweb\CryptoMessage\Commands;

use Illuminate\Console\Command;

class CryptoMessageCommand extends Command
{
    public $signature = 'crypto-message';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
