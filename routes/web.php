<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TripController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\CountyController;
use App\Http\Controllers\FacilityController;

Route::get('/', function () {
    return view('home'); // resources/views/home.blade.php
})->name('home');

Route::get('/about', function () {
    return view('about'); // resources/views/about.blade.php
})->name('about');

Route::get('/services', function () {
    return view('services'); // resources/views/services.blade.php
})->name('services');

Route::get('/blog', function () {
    return view('blog'); // resources/views/blog.blade.php
})->name('blog');

Route::get('/contact', function () {
    return view('contact'); // resources/views/contact.blade.php
})->name('contact');

Route::get('/facilities', function () {
    return view('facilities'); // resources/views/contact.blade.php
})->name('facilities');





Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::post('/facility/store', [FacilityController::class, 'store'])->name('facility.store');

// Route::get('/coverage', function () {
//     return view('coverage'); // resources/views/contact.blade.php
// })->name('coverage');

// Route::get('/compliance', function () {
//     return view('compliance'); // resources/views/contact.blade.php
// })->name('compliance');

// Route::get('/careers', function () {
//     return view('careers'); // resources/views/contact.blade.php
// })->name('careers');



// Route::post('/save_trip', [TripController::class, 'save_trip'])->name('save_trip');
// Route::post('/send_contact', [ContactController::class, 'send'])->name('send_contact');


// Route::get('careers/apply', [CareerController::class, 'showForm'])->name('careers.apply');
// Route::post('careers/submit', [CareerController::class, 'submitApplication'])->name('careers.submit');


// routes/web.php
// Route::get('/latest-news', function () {
//     return view('blogs.latestNews');
// })->name('latestNews');

// Route::get('/nemt-vs-ambulance', function () {
//     return view('blogs.nemtVsAmbulance');
// })->name('nemtVsAmbulance');

// Route::get('/serving-community', function () {
//     return view('blogs.servingCommunity');
// })->name('servingCommunity');

// Route::get('/dispatch', function () {
//     return view('blogs.dispatch');
// })->name('dispatch');

// Route::get('/beyond-the-ride', function () {
//     return view('blogs.beyondTheRide');
// })->name('beyondTheRide');

// Route::get('/benefits-local-nemt-inland-empire', function () {
//     return view('blogs.localNEMTBenefits');
// })->name('localNEMTBenefits');

// Route::get('/wheelchair-transportation', function () {
//     return view('blogs.wheelchairTransport');
// })->name('wheelchairTransport');

// Route::get('/nemt-reduce-hospital-readmissions-southern-california', function () {
//     return view('blogs.nemtReadmission');
// })->name('nemtReadmission');

// Route::get('/senior-transportation-nemt-independent-living', function () {
//     return view('blogs.seniorTransportation');
// })->name('seniorTransportation');

// Route::get('/riverside-county-nemt', [CountyController::class, 'riverside'])->name('riversideNemt');
// Route::get('/san-bernardino-county-nemt', [CountyController::class, 'sanBernardino'])->name('sanBernardinoNemt');
// Route::get('/orange-county-nemt', [CountyController::class, 'orange'])->name('orangeNemt');
// Route::get('/los-angeles-county-nemt', [CountyController::class, 'losAngeles'])->name('losAngelesNemt');
