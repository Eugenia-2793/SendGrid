<?php

use App\Http\Controllers\EnviarCorreoController;
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
    return view('enviarcorreo');
});

Route::get('/enviarcorreo', function () {
    return view('enviarcorreo');
});

Route::controller(EnviarCorreoController::class)->group(function () {
    Route::get('sendGrid', 'sendGrid')->name('sendGrid.sendGrid');
   
});
//Route::post('/enviar-correo', EnviarCorreoController::class)->name('enviar-correo');

// Route::controller(EnviarCorreoController::class)->group(function () {
//     Route::get('sendGrid', 'sendGrid')->name('sendGrid.sendGrid');
// });

