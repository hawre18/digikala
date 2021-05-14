<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->group(function (){
    Route::get('/panel','PanelController@index');
    Route::resource('/province','ProvinceController');
    Route::resource('/city','CityController');


    /** Route::resource('/aboutme','ArtistController');
    Route::resource('/articles','ArticleController'); **/
});
Route::namespace('App\Http\Controllers\Seller')->prefix('seller')->group(function (){
    Route::get('/register','Auth\RegisterController@register');
    Route::post('/sendercode','Auth\RegisterController@senderCode')->name('sendercode');
    Route::post('/codeaccept','Auth\RegisterController@codeAccept')->name('codeaccept');
    Route::post('/documents/upload','DocumentController@store')->name('documents.store');
    Route::post('/photos.upload','PhotoController@uploadPhoto')->name('photos.upload');
    Route::get('/loginform','Auth\SellerLoginController@showLoginForm')->name('showLoginSeller.form');
    Route::post('login','Auth\SellerLoginController@login')->name('seller.login');
    Route::get('/dashboard','SellerController@dashboard')->name('seller.dashboard');
});
