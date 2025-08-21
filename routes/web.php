<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
//use App\Http\Controllers\AdminController;
//use App\Http\Controllers\UserController;
use App\Http\Controllers\Home\IndexController;

//юзер
Route::group(['namespace'=>'Title'],function(){
    Route::get('/',[App\Http\Controllers\Home\IndexController::class,'index'])->name('home');
    //Route::get('/about',[App\Http\Controllers\Title\IndexController::class,'about']);
   // Route::get('/about',[App\Http\Controllers\Title\IndexController::class,'about']);

});
//админка
Route::group(['namespace'=>'Admin','middleware'=>'admin','prefix'=>'admin'],function(){
    Route::get('/auth',[App\Http\Controllers\Admin\IndexController::class,'auth']);
    Route::get('/',[App\Http\Controllers\Admin\IndexController::class,'index']);
});
//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
