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

// use App;

Route::get('/', function () {

    return view('welcome');

});

Route::post('/store', 'PaymentGatewayController@storeSession');

Route::get('/home', function(){

	return view('home');

});

Route::get('/pay', 'PaymentGatewayController@store');


// Route::get('/pdf-view', function(){

// 	//logic here
// 	$pdf = APP::make('dompdf.wrapper');
// 	$pdf->loadView('pdf.test');

// 	return $pdf->stream();

// });
