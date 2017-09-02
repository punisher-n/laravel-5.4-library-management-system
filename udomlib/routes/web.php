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


Route::get('/home', 'pagesController@homepage');

Route::get('/', 'pagesController@main')->name('main');
//Route::get('/books', 'booksController@index');
//Route::get('/books/create_book', 'booksController@create_book');
//Route::get('/books/{id}', 'booksController@show');
//Route::post('books', 'booksController@store');
Route::get('/libr-manager', 'adminController@home');
Route::get('/new-book', 'adminController@newbook');
//Route::get('/new-user', 'adminController@newuser');

//Route::post('home', 'adminController@store_user');

Route::get('/register', 'registerController@create');
Route::post('/register', 'registerController@store');

Route::get('/login', 'loginController@create');
Route::post('/login', 'loginController@store')->name('login');
//Route::get('/logout', 'loginController@destroy');

