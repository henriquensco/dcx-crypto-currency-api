<?php

use App\Events\CryptoRealtime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CryptoPriceController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => '/v1'], function ($route) {
    $route->get('/prices', [CryptoPriceController::class, 'get']);
    
    $route->get('/broadcasting', function() {
        event(new CryptoRealtime('mensagem de teste'));
    });
});

//Route::get('/prices', [CryptoPriceController::class, 'get']);