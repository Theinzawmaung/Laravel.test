<?php
use App\Http\Controllers\TicketsController;

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


Route::view('/', 'layouts/home');
Route::view('/about', 'layouts/about');
//ticket
Route::get('/contact', 'TicketsController@create');
Route::post('/contact', 'TicketsController@store');
Route::get('/tickets','TicketsController@index');
Route::get('/tickets/{slug}','TicketsController@show');
Route::get('/tickets/{slug}/edit','TicketsController@edit');
Route::patch('/tickets/{slug}/edit','TicketsController@update');
Route::delete('/ticket/{slug}','TicketsController@destroy');
//comments
Route::post('comment','CommentsController@newComment');