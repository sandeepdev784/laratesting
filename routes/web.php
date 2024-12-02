<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Models\Add;
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

Route::get('/', function() {
    $adds = Add::get();
    return view('home', compact(['adds']));
});

Route::get('delete/{id}', [AddController::class, 'deleteData']);

Route::post('updated', [AddController::class,('store')])->name('updated');
