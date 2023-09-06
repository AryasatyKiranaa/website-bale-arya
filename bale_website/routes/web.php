<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    $meetingsPlaces = DB::table('tb_place')
    ->join('tb_place_capacity', 'tb_place.place_id', '=', 'tb_place_capacity.place_id')
    ->where('tb_place.category', 'Meetings')
    ->get();

    $weddingsPlaces = DB::table('tb_place')
        ->join('tb_place_capacity', 'tb_place.place_id', '=', 'tb_place_capacity.place_id')
        ->where('tb_place.category', 'Weddings')
        ->get();

    $eventsPlaces = DB::table('tb_place')
        ->join('tb_place_capacity', 'tb_place.place_id', '=', 'tb_place_capacity.place_id')
        ->where('tb_place.category', 'Events')
        ->get();

    $allPlaces = DB::table('tb_place')
        ->join('tb_place_capacity', 'tb_place.place_id', '=', 'tb_place_capacity.place_id')
        ->get();

    return view('index', [
        'meetingsPlaces' => $meetingsPlaces,
        'weddingsPlaces' => $weddingsPlaces,
        'eventsPlaces' => $eventsPlaces,
        'allPlaces' => $allPlaces
    ]);

});

Route::get('/place/{id}', function ($id) {
    // Retrieve the parameter and use it in your logic
    $place = DB::table('tb_place')->where('place_id', $id)->first();
    $capacity = DB::table('tb_place_capacity')->where('place_id', $id)->first();

    return view('building', [
        'place' => $place,
        'capacity' => $capacity,
    ]);
})->name('place');


Route::post('/newplace', function (Request $request) {
    $placeName = $request->input('name');
    $placeDesc = $request->input('desc');
    $image = $request->file('image');
    $category = $request->input('category');

    // Save the place data
    $placeId = DB::table('tb_place')->insertGetId([
        'place_name' => $placeName,
        'place_desc' => $placeDesc,
        'image' => $image->getClientOriginalName(),
        'category' => $category
    ]);

    if ($image) {
        $image->move(public_path('images'), $image->getClientOriginalName());
    }

    $capacity = $request->input('capacity');
    $theater = $request->input('theater');
    $roundtable = $request->input('roundtable');
    $longtable = $request->input('longtable');
    $cocktail = $request->input('cocktail');

    DB::table('tb_place_capacity')->insert([
        'place_id' => $placeId,
        'capacity' => $capacity,
        'theater' => $theater,
        'roundtable' => $roundtable,
        'longtable' => $longtable,
        'cocktail' => $cocktail
    ]);

    Session::flash('success', 'Booking submitted successfully!');
    return redirect('/');
})->name('newplace');


Route::post('/booking/{id}', function (Request $request, $id) {
    $placeId = $id;
    $place = DB::table('tb_place')->where('place_id', $placeId)->first();
    $placeName = $place->place_name;
    $bookingDate = $request->input('booking_date');
    $bookingContact = $request->input('name');
    $bookingPhone = $request->input('phone');
    $bookingEmail = $request->input('email');
    $bookingDate2 = $request->input('booking_date2');
    $bookingDate3 = $request->input('booking_date3');
    $noOfGuest = $request->input('numberofguest');


    $bookingId = DB::table('tb_booking')->insertGetId([
        'place_id' => $placeId,
        'place_name' => $placeName,
        'booking_date' => $bookingDate,
        'booking_date2' => $bookingDate2,
        'booking_date3' => $bookingDate3,
        'booking_contact' => $bookingContact,
        'booking_phone' => $bookingPhone,
        'booking_email' => $bookingEmail,
        'booking_guest' => $noOfGuest
        
    ]);

    Session::flash('success', 'Booking submitted successfully!');
    return redirect()->route('place', ['id' => $placeId]);
})->name('storeBooking');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');


