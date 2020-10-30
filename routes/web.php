<?php

use Illuminate\Support\Facades\Route;
use App\Mail\UserRegisteredMail;
use Illuminate\Support\Facades\Mail;

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
    return view('welcome');
});

Route::get('/email', function () {
    $value = [ 'name' => 'Ruban'];
//    Mail::to('rubanshanthi24@gmail.com')->send(new UserRegisteredMail($value));

    Mail::mailer('mailgun')->to('rubanshanthi24@gmail.com')->send(new UserRegisteredMail($value));

    dd('Working');
//   return new UserRegisteredMail($value);
});
