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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'CustomerController')->name('customers');

Route::get('/all/customer', 'CustomerDataController@getCustomers') ;

Route::post('add/customer/new', 'CustomerDataController@addCustomers') ;

Route::put('customer/update/{id}','CustomerDataController@updateCustomer');

Route::delete('remove/customer/{id}','CustomerDataController@destroyCustomer');


