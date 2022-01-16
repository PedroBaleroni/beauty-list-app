<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ServicesController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(
    ['as'=>'auth.',
    'prefix'=>'entrar'
], function(){
    Route::get('/',[AuthController::class,'index'])->name('form-login');
    Route::get('/dash',[AuthController::class,'dashboard'])->name ('dash');
    Route::post('/login/storage',[AuthController::class,'insert'])->name('login');
    Route::post('/register',[AuthController::class,'register'])->name('register');

    }
);
Route::get('/',[AuthController::class,'manager'])->name('auth.index');

Route::group(
    [
        'as' => 'schedule.',
        'prefix' => 'agenda'
    ],  function(){
        Route::get('/meus-horarios', [ScheduleController::class,'index'])->name('index');
        Route::get('/clientes',[ScheduleController::class,'manager'])->name('admin');
        Route::get('/set',[ScheduleController::class,'setSchedule'])->name('set');
        Route::post('/store',[ScheduleController::class,'store'])->name('store');
        Route::get('/{id?}',[ScheduleController::class,'show'])->name('show');
        
    }
);

Route::group(
    [
        'as'=>'service.',
        'prefix' => 'servico'
    ],  function(){
        Route::get('/', [ServicesController::class,'show'])->name('show');
        Route::get('/set',[ServicesController::class,'setService'])->name('set');
        Route::post('/store',[ServicesController::class,'store'])->name('store');
    }
);
