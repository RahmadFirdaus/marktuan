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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tuan', function () {
    return view("mark");
});

Route::get('/testmodel', function () {
	$query =App\post::all();
    return $query;
});

Route::get('/testmodel', function () {
	$query =App\anggota::find(5);
    return $query;
});

Route::get('/testmodel', function () {
	$query =App\siswa::all();
    return $query;
});


