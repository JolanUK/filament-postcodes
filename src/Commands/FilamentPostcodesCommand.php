<?php

namespace jolanUK\FilamentPostcodes\Commands;

use Illuminate\Console\Command;

class FilamentPostcodesCommand extends Command
{
    public $signature = 'filament-postcodes';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
