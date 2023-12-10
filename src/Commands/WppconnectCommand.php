<?php

namespace Eele94\Wppconnect\Commands;

use Illuminate\Console\Command;

class WppconnectCommand extends Command
{
    public $signature = 'wppconnect-laravel-client';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
