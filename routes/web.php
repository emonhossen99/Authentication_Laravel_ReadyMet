<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth');




// Route::group(['middleware' => ['auth','verified_email']],function(){
//     Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile']);
// });

// others middleware route
Route::middleware(['auth', 'verified_email:mdxhamedemon@gmail.com'])->group(function () {
    Route::get('/profile', [App\Http\Controllers\HomeController::class, 'profile']);
});
