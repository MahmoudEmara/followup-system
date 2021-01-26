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


Route::get('/followups', 'FollowupController@index')->name('followups.index');
Route::get('/followups/create', 'FollowupController@create')->name('followups.create');
Route::post('/followups', 'FollowupController@store')->name('followups.store');
Route::post('/followup_replies', 'FollowupReplyController@store')->name('followup_replies.store');



Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
