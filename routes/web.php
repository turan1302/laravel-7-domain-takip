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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::group(['prefix'=>'/','as'=>'panel.'],function (){
    Route::get('','HomeController@index')->name('index');

    /** AYARLAR */
   Route::group(['prefix'=>'ayarlar','as'=>'ayarlar.'],function (){
       Route::get('','SettingController@index')->name('index');
       Route::patch('{setting}','SettingController@update')->name('update');
   });

   /** MÜŞTERİLER */
    Route::group(["prefix"=>'musteriler','as'=>'musteriler.'],function (){
        Route::get('','CustomerController@index')->name('index');
        Route::get('ekle','CustomerController@create')->name('create');
        Route::post('','CustomerController@store')->name('store');
        Route::group(['prefix'=>'{customer}'],function (){
            Route::get('duzenle','CustomerController@edit')->name('edit');
            Route::patch('','CustomerController@update')->name('update');
            Route::delete('','CustomerController@destroy')->name('destroy');
            Route::get('','CustomerController@show')->name('show');
        });
    });
});
