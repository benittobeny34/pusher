<?php

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

use App\Events\FormSubmittedEvent;
use App\User;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/counter', function () {
    return view('counter');
});

Route::get('/sender', function () {
    return view('sender');
});

Route::post('/sender', function (Request $request) {
    $user = factory(User::class)->create();
    info('event triggered');
    return view('sender')->with('mesage', 'event trigged');
});


Route::get('/get-ip',"GeoLocationController@index");
