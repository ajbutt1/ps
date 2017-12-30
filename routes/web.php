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

//Authentication routes
Route::get('auth/login','Auth\LoginController@showLoginForm');
Route::post('auth/login','Auth\LoginController@login');
Route::get('auth/logout','Auth\LoginController@logout');
Route::get('auth/register','Auth\RegisterController@showRegistrationForm');
Route::post('auth/register','Auth\RegisterController@register');

//password reset routes
/*Route::get('password/reset/{token?}','Auth\ResetPasswordController@showResetForm');
Route::post('password/reset','Auth\ResetPasswordController@reset');
Route::get('password/email','Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email','Auth\ResetPasswordController@sendResetLinkEmail');*/

//Crawler
Route::get('/crawler','CrawlerController@show');

//account
Route::get('/createAccount', function () {
    return view('createAccount');
});
Route::get('/forgotPasword', function () {
    return view('forgotPasword');
});
Route::get('/', function () {
    return view('landing');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/forgotPassword',function(){
	return view('forgotPassword');
});
//share related routes
Route::get('/dashboard','ShareController@getDashboard');
Route::get('/portfolio', 'ShareController@getPortfolio');
Route::get('/faq', 'ShareController@getFaq');

//market summary routes
Route::get('/AutomobileAssemblerView',function(){return view('AutomobileAssembler');});
Route::get('/AutomobileAssembler','ShareController@getAutomobileShares')->name('AutomobileAssembler');
Route::get('/Electricalgoods','ShareController@getElectricalGoodsShares');
Route::get('/cement','ShareController@getCementShares');
Route::get('/chemical','ShareController@getChemicalShares');



