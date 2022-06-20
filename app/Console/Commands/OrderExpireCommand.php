<?php

namespace App\Console\Commands;

use App\Models\CompanyOrder;
use Illuminate\Console\Command;

class OrderExpireCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:expire';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'If 45 day left, change order status to history';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        CompanyOrder::where('publish_time', '<', now()->subDays(45)->endOfDay())->update(['status' => 'history']);
    }
}
