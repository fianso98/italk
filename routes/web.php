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

Auth::routes(['verify'=> true]);
// add ,'verified' to middelware for email confirmation PS: you need a STMP server
Route::middleware(['auth','verified'])->group(function () {
    Route::group([
        'prefix'=>'admin',
        'as'=>'admin.',
        'middleware'=>' Is_admin',
    ],function(){

    });
    Route::group([
        'prefix'=>'teacher',
        'as'=>'teacher.',
        'middleware'=>'Is_teacher',
    ],function(){
        
        Route::get('/dashbord',function(){
            return 'you are a teacher welcome';
        });
    });
    Route::group([
        'prefix'=>'student',
        'as'=>'student.',
        'middleware'=>'Is_student',
    ],function(){
        Route::get('/dashbord',function(){
            return 'you are a student welcome';
        });
    });

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
});