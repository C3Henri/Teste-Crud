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
    return redirect()->route('dashboard');
});

Route::get('/dashboard', 'Resource\dashboardController@dashInfo')->name('dashboard');
Route::get('/newuser', 'Resource\userController@newUser');
Route::get('/edituser', 'Resource\userController@editUser');

Route::post('/newuser', 'Resource\userController@saveNewUser')->name('newuser');
Route::post('/edituser', 'Resource\userController@saveEditUser')->name('edituser');
Route::post('deleteuser', 'Resource\userController@ajaxDeleteUser');