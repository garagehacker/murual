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
    return view('auth.login');
});


Auth::routes();

Route::group(['middleware' => 'auth'], function (){
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::resource('users', \App\Http\Controllers\UserController::class);
    Route::get('folio/{id}', [\App\Http\Controllers\UserController::class,'folio'])->name('folio');
    Route::get('folio-create/{id}', [\App\Http\Controllers\UserController::class,'folioCreate']);
    Route::post('folio-create-store/{id}', [\App\Http\Controllers\UserController::class,'folioCreateStore']);
    Route::get('folio-edit/{id}', [\App\Http\Controllers\UserController::class,'folioEdit'])->name('folio-edit');
    Route::get('folio-delete/{id}', [\App\Http\Controllers\UserController::class,'folioDelete'])->name('folio-delete');
    Route::patch('folio-edit-update/{id}', [\App\Http\Controllers\UserController::class,'folioEditUpdate']);
    Route::resource('funds', \App\Http\Controllers\FundController::class);

    Route::resource('equity_funds', \App\Http\Controllers\EquityFundController::class );
    Route::resource('debt_funds', \App\Http\Controllers\DebtFundController::class );
    Route::resource('hybrid_funds', \App\Http\Controllers\HybridFundController::class );
    Route::resource('others_funds', \App\Http\Controllers\OthersFundController::class );

    Route::resource('current_version', \App\Http\Controllers\AppVersionController::class);


    Route::get('file-import-export', [\App\Http\Controllers\UserController::class, 'fileImportExport']);
    Route::post('file-import', [\App\Http\Controllers\UserController::class, 'fileImport'])->name('file-import');
    Route::get('file-export', [\App\Http\Controllers\UserController::class, 'fileExport'])->name('file-export');

});
