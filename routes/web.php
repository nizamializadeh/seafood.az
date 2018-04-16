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
  Route::get('/socials', 'Backend\SocialsController@index');
  Route::get('socialCreate', 'Backend\SocialsController@create');
  Route::post('/social-create', 'Backend\SocialsController@store');
  Route::get('/social/{social}/edit', 'Backend\SocialsController@edit');
  Route::patch('/social/{social}', 'Backend\SocialsController@update');
  Route::delete('/social/{social}/delete', 'Backend\SocialsController@destroy');
  Route::get('/contact-admin', 'Backend\ContactController@index');
  Route::get('/contact/{contact}/edit', 'Backend\ContactController@edit');
  Route::patch('/contact/{contact}', 'Backend\ContactController@update');
  Route::get('/slider', 'Backend\SliderController@index');
  Route::get('/slider/{slider}/edit', 'Backend\SliderController@edit');
  Route::patch('/slider/{slider}', 'Backend\SliderController@update');
  Route::get('/blogcats', 'Backend\BlogCatsController@index');
  Route::get('/blogcategoryCreate', 'Backend\BlogCatsController@create');
  Route::post('/blogcategory-create', 'Backend\BlogCatsController@store');
  Route::get('/blogcategoryedit/{category}/edit', 'Backend\BlogCatsController@edit');
  Route::patch('/blogcategory/{category}', 'Backend\BlogCatsController@update');
  Route::delete('/blogcategory/{category}/delete', 'Backend\BlogCatsController@destroy');
  Route::get('/blogs-admin', 'Backend\BlogsController@index');
  Route::get('/blogCreate', 'Backend\BlogsController@create');
  Route::post('/blog-create', 'Backend\BlogsController@store');
  Route::get('/blog/{blog}/edit', 'Backend\BlogsController@edit');
  Route::patch('/blog/{blog}', 'Backend\BlogsController@update');
  Route::delete('/blog/{blog}/delete', 'Backend\BlogsController@destroy');
  Route::get('/show/{blog}', 'Backend\BlogsController@show');
  Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

  // Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});
