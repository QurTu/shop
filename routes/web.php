<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\AdminController;

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

Route::get('/home', 'HomeController@index')->name('home');


//admin routes
Route::get('admin/home', 'AdminController@index')->name('admin.home');
Route::get('admin', 'Admin\LoginController@showLogin')->name('admin.login');
Route::post('admin', 'Admin\LoginController@login');

    // kategory routes
    Route::get('admin/category', 'KategoryController@index')->name('category');
    Route::post('admin/category/add', 'KategoryController@add')->name('category.add');
    Route::post('admin/category/delete/{kategory}', 'KategoryController@delete')->name('category.delete');
    Route::get('admin/category/edit/{kategory}', 'KategoryController@edit')->name('category.edit');
    Route::post('admin/category/update/{kategory}', 'KategoryController@update')->name('category.update');
    //sub-category routs
    Route::get('admin/subcategory', 'SubKategoryController@index')->name('subcategory');
    Route::post('admin/subcategory/add', 'SubKategoryController@add')->name('subcategory.add');
    Route::post('admin/subcategory/delete/{subKategory}', 'SubKategoryController@delete')->name('subcategory.delete');
    Route::get('admin/subcategory/edit/{subKategory}', 'SubKategoryController@edit')->name('subcategory.edit');
    Route::post('admin/subcategory/update/{subKategory}', 'SubKategoryController@update')->name('subcategory.update');