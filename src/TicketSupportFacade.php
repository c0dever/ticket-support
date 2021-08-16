<?php

namespace Codever\TicketSupport;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Codever\TicketSupport\TicketSupport
 */
class TicketSupportFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'ticket-support';
    }
}
