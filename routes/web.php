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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(
    [
        'as' => 'schedule.',
        'prefix' => 'agenda',
        'middleware' => 'auth'
    ],  function(){
        Route::get('/meus-horarios','ScheduleController@index')->name('index');
        Route::get('/clientes','ScheduleController@manager')->name('admin');
        Route::post('/set','ScheduleController@setSchedule')->name('set');
        Route::post('/store','ScheduleController@store')->name('store');
        Route::get('/{id?}','ScheduleController@show')->name('show');
    }
);

Route::group(
    [
        'as' => 'product',
        'prefix'=>'estoque',
        'middleware'=>'auth'
    ],  function(){
        Route::get('/', 'ProductsController@index')->name('index');
        Route::post('/store','ProductsController@store')->name('store');
        Route::post('/update','ProductsController@updaate')->name('update');
        Route::get('/{id?}','ProductsController@show')->name('show');
    }
);

Route::group(
    [
        'as'=>'service',
        'prefix' => 'servico',
        'middleware' => 'auth' 
    ],  function(){
        Route::get('/', 'ServicesController@index')->name('index');
        Route::get('/{id?}', 'ServicesController@show')->name('show');
        Route::post('/update', 'ServiceController@update')->name('update');
        Route::post('/store','ServicesController@store')->name('store');
    }
);
