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

Route::get('/login', function () { return view('adminator.signin'); });
Route::get('/register', function () { return view('adminator.signup'); });

Route::get('/dashboard', function () { return view('adminator.dashboard'); });
Route::get('/basic-table', function () { return view('adminator.basic-table'); });
Route::get('/blank', function () { return view('adminator.blank'); });
Route::get('/buttons', function () { return view('adminator.buttons'); });
Route::get('/calendar', function () { return view('adminator.calendar'); });
Route::get('/charts', function () { return view('adminator.charts'); });
Route::get('/chat', function () { return view('adminator.chat'); });
Route::get('/compose', function () { return view('adminator.compose'); });
Route::get('/datatable', function () { return view('adminator.datatable'); });
Route::get('/email', function () { return view('adminator.email'); });
Route::get('/forms', function () { return view('adminator.forms'); });
Route::get('/google-maps', function () { return view('adminator.google-maps'); });
Route::get('/ui', function () { return view('adminator.ui'); });
Route::get('/vector-maps', function () { return view('adminator.vector-maps'); });

Route::get('/404', function () { return view('adminator.404'); });
Route::get('/500', function () { return view('adminator.500'); });
