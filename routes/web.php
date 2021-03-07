<?php
Route::get('/', 'PagesContriller@index')->name('home');
Route::get('/contact', 'PagesContriller@contact')->name('contact');
Route::get('/about', 'PagesContriller@about')->name('about');
Route::get('/products', 'PagesContriller@products')->name('products');
Route::get('/shop','ShopController@index')->name('shop');

Route::get('/admin','AdminController@index')->name('admin');
Route::get('/product','ProductController@index')->name('product');