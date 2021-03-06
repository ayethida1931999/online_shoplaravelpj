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

Route::get('/', 'PageController@mainfun')->name('mainpage');

Route::get('loginform','PageController@loginfun')->name('loginpage');

Route::get('registerform','PageController@registerfun')->name('registerpage');

Route::get('brand/{id}','PageController@brandfun')->name('brandpage');

Route::get('itemdetail/{id}','PageController@itemdetailfun')->name('itemdetailpage');
Route::get('filteritems/{id}','PageController@filteritems')->name('filteritemspage');
Route::get('category/{id}','PageController@category')->name('categorypage');

Route::get('promotion','PageController@promotionfun')->name('promotionpage');
Route::get('shoppingcart','PageController@shoppingcartfun')->name('shoppingcartpage');

Route::get('subcategory/{id}','PageController@subcategoryfun')->name('subcategorypage');
//backend
Route::middleware('role:Admin')->group(function(){
	Route::get('dashboard','backendController@dashboardfun')->name('dashboardpage');
Route::resource('items','ItemController');
});


Route::resource('brands','BrandController');
Route::resource('categories','CategoryController');
Route::resource('subcategories','SubcategoryController');
//end backend
Route::resource('orders','OrderController');



Auth::routes();
//Route::get('loginform','PageController@loginfun')->name('loginpage');

Route::get('/home', 'HomeController@index')->name('home');
