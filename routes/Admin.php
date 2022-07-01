<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "Admin" middleware group. Now create something great!
|
*/

Route::group(['prefix'=>'admin', 'namespace' => 'BackEnd'],function(){
Route::get('/','AdminController@login')->name('admin.login');
Route::get('/dashboard','AdminController@dashboard')->name('admin.dashboard');

//------------------Begin Book Routes----------------------------------------------------
Route::get('/create-books', 'BookController@create_books')->name('create.book');
Route::post('/store-books', 'BookController@store_books')->name('store.book');
Route::get('/show-books', 'BookController@show_books')->name('show.book');
Route::get('/delete-book/{id}', 'BookController@delete_book')->name('delete.book');
Route::get('/edit-book/{id}', 'BookController@edit_book')->name('edit.book');
Route::post('/change-book/{id}', 'BookController@change_book')->name('change.book');
Route::get('/read-book/{id}', 'BookController@read_book')->name('read.book');
Route::post('/search-book', 'BookController@search_book')->name('search.book');
Route::get('/book-details/{id}', 'BookController@book_details')->name('details.book');


//----------------End Book Routes-------------------------------------------------------------

//------------------Begin Category Routes----------------------------------------------------
Route::get('/show-category', 'CategoryController@show_categories')->name('show.category');
Route::get('/create-category', 'CategoryController@create_category')->name('create.category');
Route::post('/store-category', 'CategoryController@store_category')->name('store.category');
Route::get('/delete-category/{id}', 'CategoryController@delete_category')->name('delete.category');
Route::get('/edit-category/{id}', 'CategoryController@edit_category')->name('edit.category');
Route::post('/update-category', 'CategoryController@update_category')->name('update.category');
Route::get('/category-books/{id}', 'CategoryController@show_cats_books')->name('category.books');


//----------------End Category Routes-------------------------------------------------------------

//------------------Begin Readers Routes----------------------------------------------------
Route::get('/create-readers','ReaderController@create_readers')->name('create.readers');
Route::post('/store-readers','ReaderController@store_readers')->name('store.readers');

Route::get('/show-readers','ReaderController@show_readers')->name('show.readers');
Route::get('/delete-readers/{id}','ReaderController@delete_readers')->name('delete.readers');
Route::get('/edit-readers/{id}','ReaderController@edit_readers')->name('edit.readers');
Route::post('/update-readers/{id}','ReaderController@update_readers')->name('update.readers');
Route::get('/show-reader-books/{id}','ReaderController@reader_books')->name('reader.books');


//------------------End Readers Routes----------------------------------------------------

});
