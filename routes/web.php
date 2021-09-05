<?php

use App\Http\Controllers\ChannelController;
use App\Http\Controllers\PayOrderController;
use App\Http\Controllers\PostChannelController;
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

Route::get('pay', [PayOrderController::class, 'store']);

Route::get('channels', [ChannelController::class, 'index']);

Route::get('post/create', [PostChannelController::class, 'create']);

Route::get('/macro', function () {
    return \Illuminate\Support\Str::partNumber(123456789);
});

Route::get('/macro2', function () {
    return Str::prefix('Ashraf Hafiz', 'Mr. ');
});

Route::get('/macro3', function () {
    return Response::errorJason('Customized error message.');
});

Route::get('/pipeline', [\App\Http\Controllers\CastController::class, 'index']);

Route::get('customers', '\App\Http\Controllers\CustomerController@index');
Route::get('customers/show/{customerId}', '\App\Http\Controllers\CustomerController@show');
