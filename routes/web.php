<?php

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

Route::get('/',function (){
    return redirect()->route('login');
});

Auth::routes();

Route::group(['prefix'=>'/panel','as'=>'panel.','middleware'=>'auth'],function (){
    Route::get('','HomeController@index')->name('index');

    /** AYARLAR */
   Route::group(['prefix'=>'ayarlar','as'=>'ayarlar.'],function (){
       Route::get('','SettingController@index')->name('index');
       Route::patch('{setting}','SettingController@update')->name('update');
   });

   /** MÜŞTERİLER */
    Route::group(["prefix"=>'musteriler','as'=>'customers.'],function (){
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

    /** DOMAİNLER */
    Route::group(['prefix'=>'domainler','as'=>'domainler.'],function (){
        Route::get('','DomainController@index')->name('index');
        Route::get('ekle','DomainController@create')->name('create');
        Route::post('','DomainController@store')->name('store');
        Route::group(['prefix'=>'{domain}'],function (){
            Route::get('duzenle','DomainController@edit')->name('edit');
            Route::patch('','DomainController@update')->name('update');
            Route::get('','DomainController@show')->name('show');
            Route::delete('','DomainController@destroy')->name('destroy');

            /** GÜN EKLEME İŞLEMİ */
            Route::get('gun-ekle','AddDomainDayController@edit')->name('add-domain-day');
            Route::patch('yenile','AddDomainDayController@update')->name('add-day');
        });
    });

    /** PROFİL */
    Route::group(['prefix'=>'profil/{user}','as'=>'profil.'],function (){
        Route::get('','ProfilController@edit')->name('edit');
        Route::patch('','ProfilController@update')->name('update');
    });
});
