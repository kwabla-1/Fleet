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
    return view('welcome');
});

Route::get('user/account/{id}', function ($id) {
    return view('profile')->with(['users' => 'martin']);
});

Route::get('/individual/profile',function (){
    return view('auth.individual-profile');
})->name('userprofile');

Route::get('/company/profile',function (){
    return view('auth.company-profile');
})->name('companyprofile');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth','completeprofile'])->name('dashboard');

require __DIR__.'/auth.php';