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
Route::get('/home', function () {
  return view('welcome_');
});
Route::get('/petLayouts/index', function () {
  return view('/petLayouts/index');
});
Route::get('/clienteLayouts/index', function () {
  return view('index');
});
Route::get('/farmacoLayouts/index', function () {
  return view('index');
});
Route::get('/recetaLayouts/index', function () {
  return view('index');
});

Route::resource('/petLayouts','PetCrud');
Route::resource('/clienteLayouts','ClienteCrud');
Route::resource('/recetaLayouts','RecetaCrud');
Route::resource('/farmacoLayouts','FarmacoCrud');
