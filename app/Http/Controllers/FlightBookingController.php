<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FLightDetail;
use Carbon\Carbon;
use DateTime;
use Auth;
use App\Models\BookingDetail;
use Alert;

class FlightBookingController extends Controller
{
    public function getView()
    {
        $data = FLightDetail::get();
        foreach($data as $dt){
            $source[] = $dt->source;
            $destination[] = $dt->destination;
        }
        $source = array_unique($source);
        $destination = array_unique($destination);
        return view('bookflight');
    }
    
    public function getIndex()
    {
        return view('index');
    }
    
    public function getDestination($source)
    {
        $destination = FLightDetail::where('source',$source)->pluck('destination')->toArray();
        $destination = array_unique($destination);
        return $destination;
    }
    
    public function getFlightDetails(Request $request)
    {
        $source = $request->source;
        $destination = $request->destination;
        $adult_count = $request->adult_count;
        $departure_date = strtotime($request->date1);
        $day = date('l', $departure_date);
        $flight_details = FLightDetail::where('source',$source)->where('destination',$destination)->where('day',$day)->get();
        $current = strtotime(date("Y-m-d"));
        $user_date    = strtotime($request->date1);

        $datediff = $user_date - $current;
        $difference = floor($datediff/(60*60*24));
        if($difference==0)
        {
            foreach($flight_details as $key => $flight_detail){
                if($flight_detail->time < date("H:i:s")){
                    unset($flight_details[$key]);
                }
            }
        }
        return view('bookflight',compact('source','destination','departure_date','day','flight_details','adult_count'))->with('no', 1);
    }
    
    public function bookFlightTicket($id,$adult_count,$departure_date)
    {
        if(Auth::id()){
            $departure_date = date('Y-m-d',$departure_date);
            $flight_details = FLightDetail::where('id',$id)->first();
            $souce = $flight_details->source;
            $destination = $flight_details->destination;
            $day = $flight_details->day;
            $flighttime = $flight_details->time;
            $created_at = $flight_details->created_at;
            
            $time = strtotime($flighttime);
            $flight_newformat = date('H:i:s',$time);
            
            $ldate = date('H:i:s');
            
            //dd($ldate);
            
            $formatted_dt1=Carbon::parse($flight_newformat);
            $formatted_dt2=Carbon::parse($ldate);
            $hours_diff = $formatted_dt1->diffInHours($formatted_dt2);
            
            $flight_fare = '3000';
            
            if($hours_diff == 1){
                $new_flight_fare = $flight_fare + ($flight_fare * 10 / 100);
            }
            elseif($hours_diff == 2){
                $new_flight_fare = $flight_fare + ($flight_fare * 9 / 100);
            }
            elseif($hours_diff == 3){
                $new_flight_fare = $flight_fare + ($flight_fare * 8 / 100);
            }
            elseif($hours_diff == 4){
                $new_flight_fare = $flight_fare + ($flight_fare * 7 / 100);
            }
            elseif($hours_diff == 5){
                $new_flight_fare = $flight_fare + ($flight_fare * 6 / 100);
            }else{
                $new_flight_fare = $flight_fare;
            }
            $new_flight_fare = $new_flight_fare *$adult_count;
            return view('confirmbookingpage',compact('adult_count','souce','destination','departure_date','new_flight_fare','id'));
        }else{
            return redirect('/login');
        }
    }

    public function confirmBooking(Request $request)
    {
        $confirm_booking = new BookingDetail;
        $confirm_booking->user_id =  Auth::id();
        $confirm_booking->flight_id =  $request->flight_id;
        $confirm_booking->fare =  $request->price;
        $confirm_booking->booking_date =  date('Y-m-d');
        $confirm_booking->journey_date =  $request->date1;
        $confirm_booking->adult_count =  $request->adult_count;
        $confirm_booking->booking_confirmed =  1;
        $confirm_booking->created_at = date('Y-m-d H:i:s');
        $confirm_booking->updated_at = date('Y-m-d H:i:s');
        $confirm_booking->save();
        $booking_id = $confirm_booking->id;
        $adult_count = $request->adult_count;
        $flight_details = FLightDetail::where('id',$request->flight_id)->first();
        $souce = $flight_details->source;
        $destination = $flight_details->destination;
        $departure_date = $request->date1;
        $new_flight_fare = $request->price;
        $id = $request->flight_id;
        Alert::success('User Added Successfully')->autoClose(5000);
        // return redirect('/home');
        return view('/confirmbookingpage',compact('adult_count','souce','destination','departure_date','new_flight_fare','id','booking_id'));

    }

    public function holdFlightTicketView($id,$adult_count,$departure_date,Request $request)
    {
        if(Auth::id()){
            $departure_date = date('Y-m-d',$departure_date);
            $flight_details = FLightDetail::where('id',$id)->first();
            $souce = $flight_details->source;
            $destination = $flight_details->destination;
            $day = $flight_details->day;
            $flighttime = $flight_details->time;
            $created_at = $flight_details->created_at;
            
            $time = strtotime($flighttime);
            $flight_newformat = date('H:i:s',$time);
            
            $ldate = date('H:i:s');
            
            //dd($ldate);
            
            $formatted_dt1=Carbon::parse($flight_newformat);
            $formatted_dt2=Carbon::parse($ldate);
            $hours_diff = $formatted_dt1->diffInHours($formatted_dt2);
            
            $flight_fare = '300';
            
            $new_flight_fare = $flight_fare *$adult_count;
            return view('holdbookingpage',compact('adult_count','souce','destination','departure_date','new_flight_fare','id'));
        }else{
            return redirect('/login');
        }
    }
    public function confirmPutOnHold(Request $request)
    {
        $confirm_booking = new BookingDetail;
        $confirm_booking->user_id =  Auth::id();
        $confirm_booking->flight_id =  $request->flight_id;
        $confirm_booking->fare =  $request->price;
        $confirm_booking->booking_date =  date('Y-m-d');
        $confirm_booking->journey_date =  $request->date1;
        $confirm_booking->adult_count =  $request->adult_count;
        $confirm_booking->booking_on_hold =  1;
        $confirm_booking->created_at = date('Y-m-d H:i:s');
        $confirm_booking->updated_at = date('Y-m-d H:i:s');
        $confirm_booking->save();
        Alert::success('Yoyr ticket is on hold!! Please conform your booking')->autoClose(5000);
        return redirect('/home');
    }
}
