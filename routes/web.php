<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->group(function (){
    Route::get('/panel','PanelController@index');
    Route::resource('/province','ProvinceController');
    Route::resource('/city','CityController');
   /** Route::resource('/aboutme','ArtistController');
    Route::resource('/articles','ArticleController'); **/
});