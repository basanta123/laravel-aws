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
    $pages = \DB::table('pages')->get();
    return view('welcome', compact('pages'));
});

Route::get('/about', function () {
    return 'about';
});

Route::post('deploy', 'DeployController@deploy');
