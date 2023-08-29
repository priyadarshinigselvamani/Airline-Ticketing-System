<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Exception;
use App\Models\BookingDetail;

class DeleteTicketOnHold extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = "delete_ticket_on_hold";

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = "This commmand deletes all ticket which os on hold for more than 3 hours";

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

        $booking_details = BookingDetail::where('booking_on_hold','=',1)->get();
            foreach($booking_details as $key => $booking_detail){
                $on_hold_time = $booking_detail->created_at;
                $current_timestamp = Carbon::now()->toDateTimeString();
                $timestamp1 = strtotime($on_hold_time);
                $timestamp2 = strtotime($current_timestamp);
                $hour_diff = floor(($timestamp2 - $timestamp1)/(60*60));
                if($hour_diff > 3){
                    $booking_details[$key]->delete();
                }
            }
    }
}
