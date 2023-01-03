<?php

use Illuminate\Support\Facades\Route;

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


// ---------------------------ACADEMY ROUTE----------------------------------
Route::group([
    'prefix' => 'academy'
    ],function () {
        Route::get('/form', 'AcademyController@create')->name('academy.form');
        Route::get('list', 'AcademyController@list')->name('academy.list');
        Route::get('{academy}/edit', 'AcademyController@edit')->name('academy.edit');
        Route::post('/', 'AcademyController@store')->name('academy');

});

// ----------------------------TECH ROUTE------------------------------------
Route::group([
    'prefix' => 'tech'
    ], function (){
        Route::get('/form', 'TechController@create')->name('tech.form');
        Route::get('list', 'TechController@list')->name('tech.list');
        Route::post('/', 'TechController@store')->name('tech');
        Route::get('/{tech}/edit', 'TechController@edit')->name('tech.edit');
        Route::put('/{tech}', 'TechController@update')->name('tech.update');
});
