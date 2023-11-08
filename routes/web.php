<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;

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

//ROUTE

Route::get('/', function () {
    return view('welcome');
});


//ROUTE REQUIRED PARAMS
Route::get('/test2/{id}', function ($id) {
    return "welcom $id";
});

//ROUTE NOT REQUIRED PARAMS
Route::get('/test1', function () {
    return "welcom ";
});

Route::get('/test3/{id?}', function () {
    return "welcom ";
});

//ROUTE NAME
Route::get('/show_number/{id}', function ($id) {
    return "welcom $id";
})->name('A');

Route::get('/show_string/{id?}', function () {
    return "welcom ";
})->name('B');

// Route::namespace('Front')->group(function(){
//     Route::get('/store',[HomeController::class,'store']);
// }); 

// Route::prefix('/home')->group(function(){
//     Route::get('/store',[HomeController::class,'store']);
//     Route::get('/update',[HomeController::class,'update']);
//     Route::get('/delete',[HomeController::class,'delete']);
//     Route::get('/index',[HomeController::class,'index']);    
// }
// );
Route::group(['namespace'=>'Front'],function(){
    Route::get('/',function(){
        return ' hello user';
    });
    Route::get('/store',[HomeController::class,'store']);
});