<?php

namespace App\Console\Commands;

use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Exception;
use App\Models\FLightDetail;

class GoDigitKYCStatusCommand extends Command
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
        $data = FLightDetail::withTrashed()
                    ->where('booking_on_hold','=',1)->get();
                    dd($data);
        // FLightDetail::withTrashed()
        //             ->where('booking_on_hold','=',1)
        //             ->where('updated_at','<',Carbon::now()->toDateTimeString())
        //             ->chunk(100, function ($proposals) use ($tenant,&$proposal_ids) {

        //             foreach ($proposals as $proposal) {
        //                 if(isset($proposal->extras['link_visited_at'])){
        //                     try {
        //                         GoDigitKYCStatus::dispatch($proposal);
        //                         if(isset($proposal->extras['kyc_verification_status']) && ($proposal->extras['kyc_verification_status'] == "DONE")){
        //                             SavePolicyPdf::dispatch($proposal);
        //                         }
        //                         // $jobs = [new GoDigitKYCStatus($this->proposal)];
        //                         // dispatch_jobs($jobs);
        //                     } catch (Exception $e) {
        //                         report($e);
        //                         continue;
        //                     }
        //                 }
        //             }

        //         });

        //     \Log::channel("queued-pending-go-digit-kyc")
        //         ->debug("Pushed the following proposals ".implode(",",$proposal_ids)." for ". $tenant->name);
        //     $this->newLine();
        // });
    }
}
