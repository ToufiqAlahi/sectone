<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::post('attendance/store', 'Teacher\AttendanceController@store');
Route::post('attendance/students', 'Teacher\AttendanceController@students');
Route::post('attendance/update', 'Teacher\AttendanceController@update');
Route::post('attendance/today', 'Teacher\TeachersController@todaysAttendance');

Route::post('/student/attendance/show', 'Student\StudentsController@show');
