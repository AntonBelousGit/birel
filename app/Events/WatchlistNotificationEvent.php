<?php

namespace App\Events;

use Illuminate\Foundation\Events\Dispatchable;

class WatchlistNotificationEvent
{
    use Dispatchable;

    /**
     * WatchlistNotificationEvent constructor.
     * @param $user
     * @param $company_id
     * @param $type
     * @param $company
     */
    public function __construct(public $user, public $company_id, public $type, public $company)
    {
    }
}
