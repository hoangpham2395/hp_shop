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
    return "It's HP Shop.";
});

// Route backend
Route::prefix('management')->group(function () {
	Route::get('login', 'Backend\LoginController@getLogin');
	Route::post('login', ['as' => 'admin.login', 'uses' => 'Backend\LoginController@postLogin']);
	Route::get('logout', ['as' => 'admin.logout', 'uses' => 'Backend\LoginController@logout']);

	Route::middleware(['isAdmin'])->group(function () {
		Route::resource('admin', 'Backend\AdminController');
		Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'Backend\DashboardController@index']);
		Route::get('/', ['as' => 'dashboard', 'uses' => 'Backend\DashboardController@index']);
		Route::resource('employees', 'Backend\EmployeesController');
		Route::resource('jobs', 'Backend\JobsController');
		Route::resource('orders', 'Backend\OrdersController');
		Route::resource('products', 'Backend\ProductsController');
		Route::resource('brands', 'Backend\BrandsController');
		Route::resource('categories', 'Backend\CategoriesController');
	});
});