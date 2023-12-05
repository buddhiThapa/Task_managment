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
    if(Auth::check()){
        return redirect()->back();   
    }
    return view('Login_and_ragister');
});
Route::post('/login',[App\Http\Controllers\loginController::class,'login']);
Route::post('/ragistration',[App\Http\Controllers\loginController::class,'ragistration']);

Route::group(['middleware'=>'auth'] ,function(){

    // login controller
    Route::get('/logout',[App\Http\Controllers\loginController::class,'logout'])->name('logout');
    Route::get('/dashboard',[App\Http\Controllers\loginController::class,'dashboard'])->name('dashboard');

    //dashboard controller
    Route::get('/button-templete',[App\Http\Controllers\DashboardController::class,'buttonTemplete'])->name('button-templete');
    Route::get('/dropdown-templete',[App\Http\Controllers\DashboardController::class,'dropdownTemplete'])->name('dropdown-templete');
    Route::get('/typography-templete',[App\Http\Controllers\DashboardController::class,'typographyTemplete'])->name('typography-templete');
    Route::get('/icon-templete',[App\Http\Controllers\DashboardController::class,'iconTemplate'])->name('icon-templete');
    Route::get('/form-template',[App\Http\Controllers\DashboardController::class,'formTemplate'])->name('form-template');
    Route::get('/chart-template',[App\Http\Controllers\DashboardController::class,'chartTemplate'])->name('chart-template');
    Route::get('/table-template',[App\Http\Controllers\DashboardController::class,'tableTemplate'])->name('table-template');


    Route::get('/list_paginate',[App\Http\Controllers\paginate\ListPaginateController::class,'index'])->name('list_paginate');
    Route::get('/list_paginate_fetch',[App\Http\Controllers\paginate\ListPaginateController::class,'list_paginate_fetch'])->name('list_paginate_fetch');
    
    
    

});

