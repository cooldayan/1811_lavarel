<?php

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

Route::get('/', '\App\Http\Controllers\shop\IndexController@index');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
//必须登录查看的路由
Route::prefix('/') -> middleware('checkLogin') -> group(function(){
    Route::get('/car', '\App\Http\Controllers\shop\CarController@car');
    Route::get('/user', '\App\Http\Controllers\shop\UserController@user')->name('user');
    Route::get('/pay/{goods_id}', '\App\Http\Controllers\shop\PayController@pay')->name('pay');
    Route::get('/success/{order_id}', '\App\Http\Controllers\shop\OrderController@success')->name('success');
    Route::get('/aliPay/{order_id}', '\App\Http\Controllers\shop\AliPayController@aliPay')->name('aliPay');
    Route::get('/editAddress/{address_id?}', '\App\Http\Controllers\shop\AddressController@editAddress')->name('editAddress');
    Route::get('/order/{type?}', '\App\Http\Controllers\shop\OrderController@order')->name('order');
    Route::get('/addressInfo', '\App\Http\Controllers\shop\AddressController@addressInfo')->name('addressInfo');
    Route::get('/paySuccess', '\App\Http\Controllers\shop\AliPayController@paySuccess')->name('paySuccess');
    Route::get('/address', '\App\Http\Controllers\shop\AddressController@address')->name('address');
    Route::get('/ticket', '\App\Http\Controllers\shop\TicketController@ticket')->name('ticket');
    Route::get('/collect', '\App\Http\Controllers\shop\UserController@collect')->name('collects');

    Route::post('/doAddress', '\App\Http\Controllers\shop\AddressController@doAddress')->name('doAddress');
    Route::post('/doEditAddress', '\App\Http\Controllers\shop\AddressController@doEditAddress')->name('doEditAddress');
    
});

Route::get('/prolist/{cate_id?}', '\App\Http\Controllers\shop\ProListController@proList')->name('prolist');
Route::get('/index', '\App\Http\Controllers\shop\IndexController@index');
Route::get('/login', '\App\Http\Controllers\shop\LoginController@login')->name('login');
Route::get('/reg', '\App\Http\Controllers\shop\LoginController@reg');
Route::get('/proInfo/{goods_id}', '\App\Http\Controllers\shop\ProListController@proInfo')->name('proInfo');
Route::get('/unLogin', '\App\Http\Controllers\shop\LoginController@unLogin')->name('unLogin');

Route::post('/doReg', '\App\Http\Controllers\shop\LoginController@doReg');
Route::post('/doLogin', '\App\Http\Controllers\shop\LoginController@doLogin');

// Route::get('/test', '\App\Http\Controllers\shop\LoginController@test');
// Route::get('/coo', '\App\Http\Controllers\shop\LoginController@coo');

Route::prefix('ajax') -> group(function(){
    Route::post('checkEmail','\App\Http\Controllers\shop\LoginController@checkEmail');
    Route::post('proList','\App\Http\Controllers\shop\ProListController@ajaxProList')->name('ajaxPriList');
    Route::post('addBuy','\App\Http\Controllers\shop\ProListController@ajaxAddBuy')->name('addBuy');
    Route::post('addBuys','\App\Http\Controllers\shop\ProListController@ajaxAddBuys')->name('addBuys');
    Route::post('changeNum','\App\Http\Controllers\shop\CarController@ajaxChangeNum')->name('changeNum');
    Route::post('sumAll','\App\Http\Controllers\shop\CarController@ajaxSumAll')->name('sumAll');
    Route::post('subBuy','\App\Http\Controllers\shop\PayController@ajaxSubBuy')->name('subBuy');
    Route::post('getCountry','\App\Http\Controllers\shop\AddressController@ajaxGetCountry')->name('getCountry');
    Route::post('subOrder','\App\Http\Controllers\shop\OrderController@ajaxSubOrder')->name('subOrder');
    Route::post('delOrder','\App\Http\Controllers\shop\OrderController@ajaxDelOrder')->name('delOrder');
    Route::post('getOrderType','\App\Http\Controllers\shop\OrderController@order')->name('getOrderType');
    Route::post('collect','\App\Http\Controllers\shop\ProListController@ajaxCollect')->name('collect');
    Route::post('moreProList','\App\Http\Controllers\shop\ProListController@ajaxMoreProList')->name('moreProList');
    Route::post('delCollect','\App\Http\Controllers\shop\UserController@ajaxDelCollect')->name('delCollect');
});

//注册登录
Route::prefix('reg') -> group(function(){
    Route::get('register','\App\Http\Controllers\register\RegisterController@reg');
    Route::post('doRegister','\App\Http\Controllers\register\RegisterController@doReg');
    Route::post('email','\App\Http\Controllers\register\RegisterController@email')->name('email');
    Route::get('logins','\App\Http\Controllers\register\RegisterController@logins')->name('logins');
    Route::post('doLogin','\App\Http\Controllers\register\RegisterController@doLogin')->name('doLogin');
    Route::get('index','\App\Http\Controllers\register\RegisterController@index');
});

Route::get('/redis/index','DemoController@redis');