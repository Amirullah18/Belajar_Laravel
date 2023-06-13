<?php

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
    return view('welcome');
});

Route::get('/', function () {
    return view('user/tugas');
});

// Tugas 9
use App\Http\Controllers\tugas9Controller;

Route::get('tugas9', 
    [tugas9Controller::class, 'index']);


Route::post('tugas9/selesai',
    [tugas9Controller::class, 'selesai'])->name('tugas9/selesai');


Route::get('/form', function () {
    return view('form');
});

Route::get('/HELLO/{nama}/{alamat}', function ($nama, $alamat) {
    return "<h2> Hello $nama dari $alamat </h2>";
});

Route::get('/produk/{id}', function ($id) {
    return view('produk/index', ['id'=>$id]);
});


use App\Http\Controllers\UserController;
Route::get('/user', 
    [UserController::class, 'index']);

    Route::get('/user/daftar',
    [UserController::class, 'daftar']
);



Route::post('/user/checkup',
[UserController::class, 'checkup'])->name('user/checkup');

use App\Http\Controllers\TokoController;

Route::prefix('toko')->group(function(){
    Route::get('/',
    [TokoController::class, 'index']);
    
Route::get('/detail',
    [TokoController::class, 'detail']);


// p10
Route::get('/about', 
    [TokoController::class, 'about']);

Route::get('/admin',
    [TokoController::class, 'admin']);
    
Route::get('/customer',
    [TokoController::class,'customer']);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
