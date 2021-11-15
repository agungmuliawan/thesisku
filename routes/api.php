<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::prefix('options')->group(function () {
    Route::get('negara',[ApiController::class,'option_negara'])->name('api_option_negara');
    Route::get('daerah',[ApiController::class,'option_daerah'])->name('api_option_daerah');
    Route::get('distrik',[ApiController::class,'option_distrik'])->name('api_option_distrik');
    Route::get('kode-pos',[ApiController::class,'option_kode_pos'])->name('api_option_kode_pos');
    Route::get('provinsi-indonesia',[ApiController::class,'option_provinsi_indonesia'])->name('api_option_provinsi_indonesia');
});
