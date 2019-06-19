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
})->name('welcomes');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('admin/home', 'AdminController@index')->name('ahome');
// Authentication Routes...
Route::get('admin', 'Admin\LoginController@showLoginForm')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');

Route::get('admin-register', 'Admin\RegisterController@showRegistrationForm')->name('admin.register');
Route::post('admin-register', 'Admin\RegisterController@register');

Route::get('emp-register', 'Emp\RegisterController@showRegistrationForm')->name('emp.register');
Route::post('emp-register', 'Emp\RegisterController@register');

// Password Reset Routes...
Route::get('admin-password/reset', 'Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('admin-password/email', 'Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('admin-password/reset/{token}', 'Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('admin-password/reset', 'Admin\ResetPasswordController@reset');

Route::get('sadmin/home', 'SadminController@index')->name('shome');
// Authentication Routes...
Route::get('sadmin', 'Sadmin\LoginController@showLoginForm')->name('sadmin.login');
Route::post('sadmin', 'Sadmin\LoginController@login');

//$this->get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
//$this->post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('sadmin-password/reset', 'Sadmin\ForgotPasswordController@showLinkRequestForm')->name('sadmin.password.request');
Route::post('sadmin-password/email', 'Sadmin\ForgotPasswordController@sendResetLinkEmail')->name('sadmin.password.email');
Route::get('sadmin-password/reset/{token}', 'Sadmin\ResetPasswordController@showResetForm')->name('sadmin.password.reset');
Route::post('sadmin-password/reset', 'Sadmin\ResetPasswordController@reset');






//Route::get('records', 'EmpController@show')->name('emp.records');

Route::get('emplist', 'EmpRecordController@show')->name('emprec');

Route::get('addlevel1', 'EmpRecordController@addLevel1')->name('addlevel1');

Route::delete('/delete/{id}', 'EmpRecordController@delete');

Route::get('verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::get('verifyU/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');

Route::get('verifyA/{email}/{verifyToken}','Admin\RegisterController@sendEmailDoneA')->name('sendEmailDoneA');

Route::get('userlist', 'UserRecordController@show')->name('userrec');

Route::delete('/deleteuser/{id}', 'UserRecordController@delete');

Route::get('adminlist', 'AdminRecordController@show')->name('adminrec');

Route::delete('/deleteadmin/{id}', 'AdminRecordController@delete');