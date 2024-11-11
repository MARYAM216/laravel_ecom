<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Shopping;


Route::get('/dashboard',[Dashboard::class,'index'])->middleware('auth');
Route::get('/products',[Dashboard::class,'products'])->name('products')->middleware('auth');
Route::get('/create_newproducts',[Dashboard::class,'create_newproducts'])->name('create_newproducts')->middleware('auth');
Route::get('/shoproductdata',[Dashboard::class,'shoproductdata'])->name('shoproductdata')->middleware('auth');
Route::get('/delete',[Dashboard::class,'delete'])->name('delete')->middleware('auth');
Route::get('/edit/{id}',[Dashboard::class,'edit'])->name('edit')->middleware('auth');
Route::get('/update',[Dashboard::class,'update'])->name('update')->middleware('auth');
Route::get('/showproduct_details',[Dashboard::class,'showproduct_details'])->name('showdet')->middleware('auth');
Route::post('/create_new_details',[Dashboard::class,'create_new_details'])->name('createnewdet')->middleware('auth');

Route::get('/',[Shopping::class,'index'])->name('index');

Route::get('/electric',[Shopping::class,'electric'])->name('electric');
Route::get('/productdetails/{id}',[Shopping::class,'productdetails'])->name('proddet');
Route::get('/furniture',[Shopping::class,'furniture'])->name('furniture');


Route::get('/decor',[Shopping::class,'decor'])->name('decor');

Route::get('/add_to_cart',[Shopping::class,'add_to_cart'])->name('add_to_cart');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
