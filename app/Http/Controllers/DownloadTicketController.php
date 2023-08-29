<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\BookingDetail;
use App\Models\FLightDetail;
use Illuminate\Support\Facades\Storage;

class DownloadTicketController extends Controller
{
    public function downloadTicket($booking_id)
    {
        $booking_details = BookingDetail::where('id',$booking_id)->first();
        $flight_details = FLightDetail::where('id',$booking_details->flight_id)->first();
        $souce = $flight_details->source;
        $destination = $flight_details->destination;
        $departure_date = $booking_details->journey_date;
        $new_flight_fare = $booking_details->fare;
        $adult_count = $booking_details->adult_count;
        $id = $flight_details->flight_id;
        Storage::disk("local")->makeDirectory('/pdf/ticket/');

        $pdf = PDF::loadView('downloadview',compact('adult_count','souce','destination','departure_date','new_flight_fare','id'))->setOptions(['defaultFont' => 'sans-serif']);;
        return $pdf->download('invoice.pdf');
    }
}
