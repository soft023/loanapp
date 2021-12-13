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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

//===============================================//=======================================================//
Route::get('/adminlogin', 'Admin\LoginController@showloginform')->name('adminlogin');
Route::post('/adminhome', 'Admin\LoginController@login')->name('adminhomex');;
Route::post('/adminregister', 'Admin\RegisterController@register')->name('adminregister');
Route::get('/newadmin', 'Admin\RegisterController@showsignupform')->name('newadmin');
Route::get('/adminhome', 'AdminHomeController@index')->name('adminhome');
Route::post('/logout2', 'Admin\LoginController@logout')->name('logout2');
Route::post('/deletecustomer', 'AdminHomeController@deletecustomer')->name('deletecustomer');

//===================================//===================================================================//
Route::get('/mission', 'GeneralController@showmission')->name('mission');
Route::get('/contact', 'GeneralController@showcontact')->name('contact');
Route::get('/product', 'GeneralController@showproduct')->name('product');
Route::get('/management', 'GeneralController@showmanagement')->name('management');
Route::get('/faq', 'GeneralController@showfaq')->name('showfaq');


//============================//===============================================================//
Route::get('/userprofile', 'HomeController@showuserprofile')->name('userprofile');
Route::post('/updateuserprofile', 'HomeController@updateuserprofile')->name('updateuserprofile');
Route::post('/updateconsumerprofile', 'ConsumerController@updateconsumerprofile')->name('updateconsumerprofile');
Route::post('/updatetraderprofile', 'TraderController@updatetraderprofile')->name('updatetraderprofile');
Route::post('/updatecontractorprofile', 'ContractorController@updatecontractorprofile')->name('updatecontractorprofile');

Route::get('/jobprofile', 'HomeController@showjobprofile')->name('jobprofile');
Route::get('/getloan', 'HomeController@getaloan')->name('applyforloan');
Route::get('/loanhistory', 'LoanhistoryController@loanhistory')->name('loanhistory');
Route::post('/requestloan', 'LoanhistoryController@requestloan')->name('requestloan');


//========================================================================================================//

Route::get('/allcustomers', 'Admin\AdminRoleController@showallcustomer')->name('showallcustomer');
Route::get('/newloanrequest', 'Admin\AdminRoleController@shownewloanrequest')->name('shownewloanrequest');
Route::get('/allactiveloans', 'Admin\AdminRoleController@showallactiveloans')->name('showallactiveloans');
Route::get('/allinactiveloans', 'Admin\AdminRoleController@showallinactiveloans')->name('showallinactiveloans');
Route::get('/alldeclinedloans', 'Admin\AdminRoleController@showalldeclinedloans')->name('showalldeclinedloans');
Route::get('/loandeclinedform/{id}', 'Admin\AdminRoleController@showloandeclinedform')->name('showloandeclinedform');
Route::get('/loangrantform/{id}', 'Admin\AdminRoleController@showloangrantform')->name('showloangrantform');
Route::get('/moreinfo/{id}', 'Admin\AdminRoleController@moreinfo')->name('moreinfo');
Route::get('/deactivate/{id}', 'Admin\AdminRoleController@deactivate')->name('deactivate');
//============================================================================================================//
Route::post('/loangrantx', 'Admin\AdminRoleController@loangrantx')->name('loangrantx');
Route::post('/loandeclinex', 'Admin\AdminRoleController@loandeclinex')->name('loandeclinex');

//Route::post('/moreinfo', 'Admin\AdminRoleController@moreinfo')->name('moreinfo');