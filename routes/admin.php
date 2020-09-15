<?php
use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\MyMiddlewares\IsStudent;
use App\Http\Middleware\MyMiddlewares\IsTeacher;
use App\Http\Middleware\MyMiddlewares\IsAdmin;
// Auth::routes();


// Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware(IsAdmin::class)->group(function (){
//     /******************************************* Teachers Routes **********************************/
//         Route::get('/teacher/edit/{teacher}', 'TeachersController@edit');
//         Route::get('/teacher/create', 'TeachersController@create');
//         Route::resource('/teacher', 'TeachersController');
    
//     /******************************************* Dashboard Routes **********************************/
//         Route::get('/dashboard', 'DashboardController@dashboard');
//         Route::get('/settings', 'DashboardController@settings');
//         Route::get('/hostel', 'DashboardController@hostel');
//         Route::get('/library', 'DashboardController@library');
//         Route::get('/teachers', 'DashboardController@teachers');
//         Route::get('/hostel/member/{member}', 'DashboardController@member_show');
//     });
