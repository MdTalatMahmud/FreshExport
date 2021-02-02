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

use App\Http\Controllers\OrderController;

Route::get('/', function ()             { return view('index'); });
Route::get('/about', function ()        { return view('about'); });
Route::get('/products', function ()     { return view('products'); });
Route::get('/services', function ()     { return view('services'); });
Route::get('/export', function ()       { return view('export'); });
Route::get('/custom', function ()       { return view('custom'); });
Route::get('/warehouse', function ()    { return view('warehouse'); });
Route::get('/human', function ()        { return view('human'); });
Route::get('/fresh', function ()        { return view('fresh'); });
Route::get('/global', function ()       { return view('global'); });
Route::get('/contact', function ()      { return view('contact'); });

Route::get('/order',[OrderController::class,'order']);
Route::post('/send-message',[OrderController::class,'sendEmail'])->name('order.send');

