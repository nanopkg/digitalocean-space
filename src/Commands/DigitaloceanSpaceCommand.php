<?php

namespace Nanopkg\DigitaloceanSpace\Commands;

use Illuminate\Console\Command;

class DigitaloceanSpaceCommand extends Command
{
    public $signature = 'digitalocean-space';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
