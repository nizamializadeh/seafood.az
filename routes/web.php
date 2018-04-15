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
Auth::routes();
Route::get('login',function (){
    return redirect(route('index'));
})->name('login');
Route::get('/', 'Frontend\IndexController@index')->name('index');
Route::get('/aboutus', 'Frontend\IndexController@about');
Route::get('/services', 'Frontend\IndexController@services');
Route::get('/shop', 'Frontend\IndexController@shop');
Route::get('/product', 'Frontend\IndexController@product');
Route::get('/blogs', 'Frontend\IndexController@blogs');
Route::get('/singleblog', 'Frontend\IndexController@singleblog');
Route::get('/camps', 'Frontend\IndexController@camps');
Route::get('/contact', 'Frontend\IndexController@contact');
Route::group(['prefix' => 'user','middleware' => 'auth'],function (){
    Route::get('/profile', 'Frontend\IndexController@profile')->name('user.dashboard');
});


Route::get('/home', 'HomeController@index');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function() {
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('/about-admin', 'Backend\AboutController@index')->name('about.admin');
  Route::get('/about/{about}/edit', 'Backend\AboutController@edit');
  Route::patch('/about/{about}', 'Backend\AboutController@update');
  Route::get('/services-admin', 'Backend\ServicesController@index');
  Route::get('/serviceCreate', 'Backend\ServicesController@create');
  Route::post('/service-create', 'Backend\ServicesController@store');
  Route::get('/service/{service}/edit', 'Backend\ServicesController@edit');
  Route::patch('/service/{service}', 'Backend\ServicesController@update');
  Route::delete('/service/{service}/delete', 'Backend\ServicesController@destroy');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
