<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/login_app', [\App\Http\Controllers\Auth\LoginController::class, 'loginApi']);
Route::get('/fund_offers', [\App\Http\Controllers\FundController::class, 'fundApi']);
Route::get('folio_user/{id}', [\App\Http\Controllers\FundController::class,'folioApi']);
Route::get('/api_equity_funds', [\App\Http\Controllers\EquityFundController::class,'equityApi']);
Route::get('/api_debt_funds', [\App\Http\Controllers\DebtFundController::class,'debtApi']);
Route::get('/api_hybrid_funds', [\App\Http\Controllers\HybridFundController::class,'hybridApi']);
Route::get('/api_other_funds', [\App\Http\Controllers\OthersFundController::class,'otherApi']);
Route::get('/current_version', [\App\Http\Controllers\AppVersionController::class,'current_version']);
