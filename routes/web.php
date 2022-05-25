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
});
Route::get('/login',function(){
    return view('login');
});
Route::get('/sign-up',function(){
    return view('sign-up');
});
Route::get('/FQ',function(){
    return view();
});
Route::get('/FQ',function(){
    return view();
});
Route::get('/Ticketing',function(){
    return view();
});
Route::prefix('/admin')->group(function ()
{
    Route::get('/adobe', function (){
        return view();
    });
    Route::get('/lesson_student', function () {
        return view();
    });
    Route::get('/teacher', function () {
        return ;
    });
    Route::get('/manager', function () {
        return ;
    });
});