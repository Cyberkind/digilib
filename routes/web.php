<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\kategoriConntroller;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});
// Route::get('kate', function () {
//     return view('kategori');
// });
// Route::get('reg', function () {
//     return view('reg');
// });

Route::prefix('admin')->group(function(){
    Route::get('login',[adminController::class,'log']);
    Route::get('reg',[adminController::class,'reg']);
    Route::post('reg/simpan',[adminController::class,'simpan']);
   
    Route::post('login',[adminController::class,'ceklogin']);
    Route::get('home',[adminController::class,'home']);
    
//kategori
Route::get('kategori',[kategoriConntroller::class,'kategori']);

});

