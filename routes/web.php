<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightBookingController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DownloadTicketController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get("/book_flight", [FlightBookingController::class, "getView"]);
Route::get("/index", [FlightBookingController::class, "getIndex"]);
Route::get("/get_destination/{source}", [FlightBookingController::class, "getDestination"]);
Route::get("/get_flight_details", [FlightBookingController::class, "getFlightDetails"]);
Route::get("/logout", [LoginController::class, "logout"]);
Route::get("/book_flight_ticket/{id}/{adult_count}/{departure_date}", [FlightBookingController::class, "bookFlightTicket"]);
Route::post("/confirm_booking", [FlightBookingController::class, "confirmBooking"]);
Route::get("/hold_flight_ticket/{id}/{adult_count}/{departure_date}", [FlightBookingController::class, "holdFlightTicketView"]);
Route::post("/put_on_hold", [FlightBookingController::class, "confirmPutOnHold"]);
Route::get("/download_ticket/{booking_id}", [DownloadTicketController::class, "downloadTicket"]);


