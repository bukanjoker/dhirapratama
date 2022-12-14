<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Undangan;
use App\Http\Controllers\ConfigController;

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
    return view('pages.home');
});

Route::get('/fetra-eka-wedding', [ Undangan::class, 'getUndangan' ]);
Route::post('/fetra-eka-wedding/rsvp-submit', [ Undangan::class, 'insertUcapan' ]);

Route::post('/config/{key}', [ ConfigController::class, 'updateConfig' ]);
Route::get('/config/{key}', [ ConfigController::class, 'viewConfig' ]);
Route::get('/getConfig/{key}', [ ConfigController::class, 'getConfig' ]);
