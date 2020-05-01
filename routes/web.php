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
Route::post('/offers', 'StaticPagesController@registerMember');
Route::get('/offers/thank-you', 'StaticPagesController@offersThankYou');

//Admin Dashboard
Route::get('/admin', 'admin\AdminController@dashboard');

//Admin FoodCategories
Route::get('/admin/food-categories', 'admin\FoodCategoriesController@index');
Route::get('/admin/food-categories/create','admin\FoodCategoriesController@create');
Route::post('/admin/food-categories','admin\FoodCategoriesController@store');
Route::get('/admin/food-categories/{id}/edit', 'admin\FoodCategoriesController@edit');
Route::put('/admin/food-categories/{id}', 'admin\FoodCategoriesController@update');
Route::delete('/admin/food-categories/{id}/delete', 'admin\FoodCategoriesController@delete');

//Admin FoodItems
Route::get('/admin/food-items', 'admin\FoodItemsController@index');
Route::get('/admin/food-items/create','admin\FoodItemsController@create');
Route::post('/admin/food-items','admin\FoodItemsController@store');
Route::get('/admin/food-items/{id}/edit', 'admin\FoodItemsController@edit');
Route::put('/admin/food-items/{id}', 'admin\FoodItemsController@update');
Route::delete('/admin/food-items/{id}/delete', 'admin\FoodItemsController@delete');

//Admin Customers
//Admin Members
Route::get('/admin/members', 'admin\MemberController@index');
Route::delete('/admin/members/{id}/delete', 'admin\MemberController@delete');

//Admin Reservations
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
