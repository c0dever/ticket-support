<?php

namespace Codever\TicketSupport\Commands;

use Illuminate\Console\Command;

class TicketSupportCommand extends Command
{
    public $signature = 'ticket-support';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
