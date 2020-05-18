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
    return view('index');
})->name('home');

Route::get('/command/{command}', function ($command) {
    print_r(shell_exec($command));
});

Route::get('/command1', function () {
    print_r(shell_exec('composer dumpautoload'));
});

Route::get('/test', 'CvFilterController@pdfParser');

Route::get('/filter-cv', 'CvFilterController@index')->name('filter');
Route::post('/filter-cv', 'CvFilterController@cvFilter')->name('filter-cv');
