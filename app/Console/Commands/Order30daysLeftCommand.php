<?php

namespace App\Console\Commands;

use App\Events\Order30daysLeftEvent;
use App\Models\CompanyOrder;
use Illuminate\Console\Command;

class Order30daysLeftCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:30days';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Order 30 days left';

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
     * @return int
     */
    public function handle()
    {
        $order = CompanyOrder::with('user', 'company')->where('status', 'active')->where('publish_time', '=', date('Y-m-d', strtotime("-30 days")))->get();
        event(new Order30daysLeftEvent($order));
    }
}
