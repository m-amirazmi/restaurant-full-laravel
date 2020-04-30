<?php

use Illuminate\Support\Facades\Route;

//Static Pages
Route::get('/','StaticPagesController@home');
Route::get('/menu', 'StaticPagesController@menu');
Route::get('/menu/{slug}', 'StaticPagesController@singleMenu');
Route::get('/about', 'StaticPagesController@about');
Route::get('/reservations', 'StaticPagesController@reservations');
Route::get('/contact', 'StaticPagesController@contact');
Route::get('/offers', 'StaticPagesController@offers');

//Admin Dashboard
Route::get('/admin', 'admin\AdminController@dashboard');

//Admin FoodCategories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create','admin\FoodCategoriesController@create');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');

//Admin FoodItems
Route::get('/admin/food-items', 'admin\FoodItemsController@index');
Route::get('/admin/food-items/create','admin\FoodItemsController@create');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');

//Admin Customers
Route::get('/admin/offers-members', 'admin\CustomerController@allOffersMembers');
Route::get('/admin/reservations','admin\CustomerController@allReservations');

//Admin Users
Route::get('/admin/users', 'admin\UsersController@index');
Route::get('/admin/users/create','admin\UsersController@create');
Route::post('/admin/users','admin\UsersController@store');
Route::get('/admin/users/{id}/edit', 'admin\UsersController@edit');
Route::put('/admin/users/{id}', 'admin\UsersController@update');
Route::delete('/admin/users/{id}/delete', 'admin\UsersController@delete');

//Admin Auth
Route::get('/admin/register', function () {
    return view('admin/register');
});
Route::get('/admin/login', function () {
    return view('admin/login');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
