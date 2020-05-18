<?php

//use Illuminate\Support\Facades\Route;

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

	//frontend
Route::get('/','HomeController@index'); //trieu hoi ham homectr va vao ham index

Route::get('/trang-chu','HomeController@index');


//backend

Route::get('/admin','AdminController@index');   // admin đăng nhập
Route::get('/dashboard','AdminController@show_dashboard');//
Route::get('/logout','AdminController@logout');//dang xuat
Route::post('/admin-dashboard','AdminController@dashboard');//quan ly trang 