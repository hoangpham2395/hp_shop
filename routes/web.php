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

// Route frontend
Route::get('/', ['as' => 'home.index', 'uses' => 'Frontend\HomeController@index']);
Route::get('/tim-kiem', ['as' => 'home.search', 'uses' => 'Frontend\HomeController@search']);
Route::get('/dien-thoai', ['as' => 'frontend.product.index', 'uses' => 'Frontend\ProductController@index']);
Route::get('/samsung', ['as' => 'frontend.product.samsung', 'uses' => 'Frontend\ProductController@samsung']);
Route::get('/iphone', ['as' => 'frontend.product.iphone', 'uses' => 'Frontend\ProductController@iphone']);
Route::get('/xiaomi', ['as' => 'frontend.product.xiaomi', 'uses' => 'Frontend\ProductController@xiaomi']);
Route::get('/nokia', ['as' => 'frontend.product.nokia', 'uses' => 'Frontend\ProductController@nokia']);
Route::get('/hang-99%', ['as' => 'frontend.product.secondhand', 'uses' => 'Frontend\ProductController@secondhand']);
Route::get('/hang-thanh-ly', ['as' => 'frontend.product.hangthanhly', 'uses' => 'Frontend\ProductController@hangThanhLy']);	
Route::get('/phu-kien', ['as' => 'frontend.product.phukien', 'uses' => 'Frontend\ProductController@phuKien']);
Route::get('/tin-tuc', ['as' => 'frontend.product.news', 'uses' => 'Frontend\ProductController@news']);
Route::get('/mua-tra-gop', ['as' => 'frontend.product.muatragop', 'uses' => 'Frontend\ProductController@muaTraGop']);
Route::get('/mua-tu-xa', ['as' => 'frontend.product.muatuxa', 'uses' => 'Frontend\ProductController@muaTuXa']);

// Route backend
Route::prefix('management')->group(function () {
	Route::get('login', 'Backend\LoginController@getLogin');
	Route::post('login', ['as' => 'admin.login', 'uses' => 'Backend\LoginController@postLogin']);
	Route::get('logout', ['as' => 'admin.logout', 'uses' => 'Backend\LoginController@logout']);

	Route::middleware(['isAdmin'])->group(function () {
		Route::resource('admin', 'Backend\AdminController');
		Route::get('dashboard', ['as' => 'dashboard', 'uses' => 'Backend\DashboardController@index']);
		Route::get('/', ['as' => 'dashboard', 'uses' => 'Backend\DashboardController@index']);
		Route::get('get-employee-for-insert', ['as' => 'admin.getEmployeeForInsert', 'uses' => 'Backend\AdminController@getEmployeeForInsert']);
		Route::resource('employees', 'Backend\EmployeesController');
		Route::resource('jobs', 'Backend\JobsController');
		Route::resource('orders', 'Backend\OrdersController');
		Route::resource('products', 'Backend\ProductsController');
		Route::resource('brands', 'Backend\BrandsController');
		Route::resource('categories', 'Backend\CategoriesController');
		Route::post('products/upload-image', ['as' => 'products.uploadImage', 'uses' => 'Backend\ProductsController@uploadImage']);
		Route::get('attributes/products', ['as' => 'products.attribute', 'uses' => 'Backend\ProductsController@attribute']);
		Route::resource('product_group', 'Backend\ProductGroupController');
		Route::get('price/products', ['as' => 'products.price', 'uses' => 'Backend\ProductsController@price']);
	});
});