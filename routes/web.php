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

Route::get('/', [\App\Http\Controllers\MainController::class,'show'])->name('index');
Route::get('/add_history', [\App\Http\Controllers\MainController::class,'addhistory'])->name('add_history');
Route::post('/addpost',[\App\Http\Controllers\MainController::class,'create'])->name('addpost');
Route::get('hashtag/{id}',[\App\Http\Controllers\hashtags::class,'show'])->name('hashtag');
Route::get('allhashtags',[\App\Http\Controllers\hashtags::class,'all'])->name('allhashtags');
Route::group(['middleware' => 'admin'], function () {
    Route::get('/adminpanel',[\App\Http\Controllers\AdminPanel\AdminController::class,'show'])->name('adminpanel');
    Route::get('accepthistory/{id}',[\App\Http\Controllers\AdminPanel\AdminController::class,'accept'])->name('accepthistory');
    Route::get('deletethistory/{id}',[\App\Http\Controllers\AdminPanel\AdminController::class,'decline'])->name('declinehistory');

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
