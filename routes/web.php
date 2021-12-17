<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileController;
use App\Http\Controllers\CarDetailController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
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
Route:: get('/', function () {
    return view('index');
});
Route:: get('index', function () {
    return view('index');
});


Route::get('about-us', function () {
    return view('about-us');
});
Route::get('About1', function () {
    return view('About1');
});

Route::get('contact', function () {
    return view('contact');
});
Route::get('contact1', function () {
    return view('contact1');
});
Route::get('adminlogin', function () {
    return view('admin/index');
});

 Route::get('dashboard', function () {
   return view('admin/dashboard');
 });
Route::resource('car_details',CarDetailController::class);

// Route::get('upload-car', function () {
//     return view('uploadcar');
// });

 Route::get('car-listing', function () {
    return view('car-listing');
});
Route::get('car-listing1', function () {
    return view('car-listing1');
});
Route::resource('users',UserController::class);
// Route::post('post-to-server',[FileController::class, 'index']);



Auth::routes();
Route::get ('/create', [UserController::class, 'store'])->name('create-user');
Route::get('/delete', [UserController::class, 'destroy'])->name('delete-user');
Route::get('/show', [UserController::class, 'show'])->name('show-user');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('upload-car',[CarDetailController::class,'create']);
Route::get('car-listing',[CarDetailController::class,'index']);
Route::get('cardetail/{car_details}',[CarDetailController::class,'show']);
Route::get('myposts/{car_details}',[CarDetailController::class,'userpost']);
Route::get('editcar/{CarDetail}',[CarDetailController::class,'edit']);
Route::get('deletecar/{car_details}',[CarDetailController::class,'destroy']);
Route::get('updatecar/{car_details}',[CarDetailController::class,'update']);
Route::get('withdriver',[CarDetailController::class,'withdriver']);
Route::get('withoutdriver',[CarDetailController::class,'withoutdriver']);
Route::get('allcars',[CarDetailController::class,'allcars']);

Route::get('reg-users',[RegisterController::class,'usersdata']);




// Route::post('store-car-detail',[CarDetailController::class,'store']);




