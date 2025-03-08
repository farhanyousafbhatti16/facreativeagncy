<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });



Route::get('/', function () {
    return view('index');
});

Route::get('/', [PageController::class, 'home']);

Route::get('/contact', [PageController::class, 'contact']);

Route::get('/portfolio', [PageController::class, 'portfolio']);

Route::get('/service', [PageController::class, 'service']);


