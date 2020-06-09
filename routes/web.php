<?php

use Illuminate\Support\Facades\Route;

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

Route::get('hello/world',
'HelloWorldController@hello');

Route::get('event/{action}/{event_id?}',
  function($action, $event_id = null) {
    echo 'I want to ', $action , ' ';
    if (!empty($event_id))
    echo $event_id;
});

Route::get('/event/{action}/{event_id?}', function($action,
$event_id = "default") {
$data = array('action'=>$action,'eventid'=>$event_id);
return view('simple', $data);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
