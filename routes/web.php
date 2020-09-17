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

Route::get('/','HomepageController@viewform');

//login
Route::get('/login','CustomerController@loginform');
Route::post('/proses-login','CustomerController@proses_login');

//register
Route::get('/register','CustomerController@registerform');
Route::post('/proses-register','CustomerController@proses_register');

Route::get('/blog', function () {
    return view('page.blog');
});

Route::get('/detail_product',function (){
    return view('product.detail_product');
});

Route::get('/catalog',function (){
    return view('page.catalog');
});

Route::get('/list_product',function (){
    return view('product.list_product');
});

// ----------------------------------------------------------
Route::get('login', 'LoginController@login');
Route::post('proses-login', 'LoginController@proses_login');
Route::get('register', 'LoginController@register');
Route::post('proses-register', 'LoginController@proses_Register');
Route::get('dashboard', 'LoginController@dashboard');
Route::get('logout', 'LoginController@logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
