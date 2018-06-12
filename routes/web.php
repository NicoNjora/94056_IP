<?php
use App\Student;
use App\Fees;

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
    return view('/094056/home');
});

Route::get('/students/new','StudentController@create');
Route::get('/fees/pay','FeesController@pay');

Route::post('/students/save','StudentController@store');
Route::post('/fees/add','FeesController@add');


