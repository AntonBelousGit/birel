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
     * @param string $companyName
     */
    public function __construct(public $user, public $company_id, public $type, public string $companyName = '')
    {
    }
}
