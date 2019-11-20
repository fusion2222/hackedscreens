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

Route::get('/', 'Page@landingPage')->name('landingPage');
Route::get('/example/{script?}', 'Page@examplePage')->name('examplePage');

Route::get('/s/{script}', 'Page@script')->name('script');

/* Route::get('/example/{scriptName}', 'Scripts@landingPage')->name('landingPage'); */
