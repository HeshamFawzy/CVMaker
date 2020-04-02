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

Route::get('/profilepicture', 'CvController@profilepicture')->name('profilepicture');

Route::post('/profilepicturep', 'CvController@profilepicturep')->name('profilepicturep');

Route::post('/personalinformationp', 'CvController@personalinformationp')->name('personalinformationp');

Route::post('/profilep', 'CvController@profilep')->name('profilep');

Route::post('/educationp', 'CvController@educationp')->name('educationp');

Route::post('/experiencep', 'CvController@experiencep')->name('experiencep');

Route::get('/cv', 'CvController@cv')->name('cv');

Route::get('/download', 'CvController@download')->name('download');