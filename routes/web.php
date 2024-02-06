<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authmanager;

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
    return view('welcome');
})-> name('home');

Route::get('/login', [Authmanager::class , 'login']) ->name('login');
Route::post('/login', [Authmanager::class , 'loginPost']) ->name('login.post');

Route::get('/registration', [Authmanager::class , 'registration'])->name('registration');
Route::post('/registration', [Authmanager::class , 'registrationPost'])->name('registration.post');

Route::get('/logout', [Authmanager::class , 'logout'])->name('logout');

Route::group(['middleware' => 'auth'], function(){
    Route:: get('/profile', function(){
        return "Hello!";

    });
});


