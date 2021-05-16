<?php

use Illuminate\Support\Facades\Route;

Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->group(function (){
    Route::get('/panel','PanelController@index');
    Route::resource('/province','ProvinceController');
    Route::resource('/city','CityController');
    Route::resource('brands','BrandController');
    Route::get('brands.delete/{id}','BrandController@delete')->name('brands.delete');
    Route::post('/photosBrand.upload','PhotoController@uploadPhotoBrand')->name('photosBrand.upload');
    Route::get('attributes.delete/{id}','AttributeGroupController@delete')->name('attributes.delete');
    Route::resource('attributes','AttributeGroupController');
    Route::get('attributes-value.delete/{id}','AttributeValueController@delete')->name('attributes-value.delete');
    Route::resource('attributes-value','AttributeValueController');
    Route::get('categories.delete/{id}','CategoryController@delete')->name('categories.delete');
    Route::get('categories.indexSetting/{id}','CategoryController@indexSetting')->name('categories.indexSetting');
    Route::post('categories.saveSetting/{id}','CategoryController@saveSetting');
    Route::resource('categories','CategoryController');
    Route::get('comments','CommentController@index')->name('comments.index');
    Route::get('comments.show/{id}','CommentController@show')->name('comments.show');
    Route::get('comments.delete/{id}','CommentController@delete')->name('comments.delete');
    Route::post('comments/action/{id}','CommentController@action')->name('comments.action');
    Route::get('coupons.delete/{id}','CouponController@delete')->name('coupons.delete');
    Route::resource('coupons','CouponController');
    Route::get('coupons/action/{id}/{status}','CouponController@action')->name('coupon.action');
    Route::get('order/pay/{id}','OrderController@orderPay')->name('order.pay');
    Route::get('orders','OrderController@index')->name('orders.index');
    Route::get('orders/lists/{id}','OrderController@getOrderLists')->name('orders.lists');
    Route::get('orders/send/{id}','OrderController@send')->name('order.send');
    Route::get('products.delete/{id}','ProductController@delete')->name('products.delete');
    Route::resource('products','ProductController');
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
Route::prefix('api')->group(function () {
    Route::get('/categories', 'CategoryController@apiIndex');
    Route::post('/categories/attribute', 'CategoryController@apiIndexAttribute');
});