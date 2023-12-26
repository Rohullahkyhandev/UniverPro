<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use Spatie\FlareClient\View;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('add');
});


Route::post('/pdc/save', [TestController::class, 'index'])->name('save');


// pdc routes

Route::get('/pdc', function () {
    return view("pdc.documents.send_document");
});
