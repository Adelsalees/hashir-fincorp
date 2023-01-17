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

Route::get('/', function () {
  return view('front.home');
});

Route::resource('/role', 'Admin\RoleController', ['only' => ['index', 'create', 'store', 'edit', 'update']]);
Route::post('/role/bulk-delete/', 'Admin\RoleController@destroy');
Route::resource('/user', 'Admin\UserController', ['only' => ['index', 'create', 'store', 'edit', 'update']]);
Route::post('/user/bulk-delete/', 'Admin\UserController@destroy');
Route::resource('/permission', 'Admin\PermissionController', ['only' => ['index', 'create', 'store', 'edit', 'update']]);
Route::post('/permission/bulk-delete/', 'Admin\PermissionController@destroy');

Route::resource('/subuser', 'Admin\SubUserController', ['only' => ['index', 'create', 'store', 'edit', 'update']]);
Route::post('/subuser/bulk-delete/', 'Admin\SubUserController@destroy');


Auth::routes();

//Front end routes
Route::get('/home', 'Front\HomeController@index');
Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::get('auth/google', 'Front\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Front\GoogleController@handleGoogleCallback');

Route::get('auth/facebook', 'Front\FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Front\FacebookController@handleFacebookCallback');


//admin end routes
Route::prefix('admin')->group(function () {
  Route::get('/', 'Admin\AdminController@index')->name('admin.home');
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset')->name('admin.password.update');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

  Route::get('/register', 'Auth\AdminRegisterController@showRegistrationForm')->name('admin.register');
  Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');

  Route::resource('/post', 'Admin\PostController', ['only' => ['index', 'create', 'store', 'edit', 'update']]);
  Route::post('/post/bulk-delete', 'Admin\PostController@destroy');

  Route::resource('/enquiry', 'Admin\EnquiryController', ['only' => ['index']]);
  Route::post('/enquiry/bulk-delete/', 'Admin\EnquiryController@destroy');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/home', function () {
  return view('front.home');
})->name('home');
