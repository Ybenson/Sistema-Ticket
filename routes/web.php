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


//redirect to the ticket resource controller
Route::get('/', function () {
    return redirect('/tickets');
});

Route::resource('tickets','TicketController');

Route::resource('clientes','ClienteController');






