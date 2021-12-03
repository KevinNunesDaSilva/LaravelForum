<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

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
Route::resource('homepage', '\App\Http\Controllers\HomepageController');
Route::resource('post', '\App\Http\Controllers\PostController');
Route::resource('user', '\App\Http\Controllers\UserController');
Route::get('post/{id}', [PostController::class, 'show']);
Route::get('profile/{id}', [UserController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
})->middleware(['auth'])->name('dashboard');

Route::get('logout', function ()
{
    auth()->logout();
    Session()->flush();

    return Redirect()->action([HomepageController::class, 'index']);
})->name('logout');

require __DIR__.'/auth.php';
