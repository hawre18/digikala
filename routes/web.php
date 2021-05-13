<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->group(function (){
    Route::get('/panel','PanelController@index');
    Route::resource('/province','ProvinceController');
    Route::resource('/city','CityController');

   /** Route::resource('/aboutme','ArtistController');
    Route::resource('/articles','ArticleController'); **/
});
Route::namespace('App\Http\Controllers\auth\Seller')->prefix('seller')->group(function (){
    Route::get('/register','RegisterController@register');
    Route::post('/sendercode','RegisterController@senderCode')->name('sendercode');
    Route::post('/codeaccept','RegisterController@codeAccept')->name('codeaccept');
});
Auth::routes();
