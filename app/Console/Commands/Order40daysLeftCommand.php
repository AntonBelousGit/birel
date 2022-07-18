<?php

namespace App\Console\Commands;

use App\Events\Order40daysLeftEvent;
use App\Models\CompanyOrder;
use Illuminate\Console\Command;

class Order40daysLeftCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'order:40days';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Order 40 days left';

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
        $order = CompanyOrder::with('user', 'company')->where('status', 'active')->where('publish_time', '=', date('Y-m-d', strtotime("-40 days")))->get();
        event(new Order40daysLeftEvent($order));
    }
}
