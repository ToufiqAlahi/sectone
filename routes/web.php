<?php
use App\User;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware\MyMiddlewares\IsStudent;
use App\Http\Middleware\MyMiddlewares\IsTeacher;
use App\Http\Middleware\MyMiddlewares\IsAdmin;


Auth::routes();
Route::get('user', 'HomeController@user_info');

/******************************************* Home Routes **********************************/
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('pages/events', 'HomeController@events');
Route::get('pages/advisors', 'HomeController@advisors');
Route::get('pages/members', 'HomeController@members');

Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware(IsAdmin::class)->group(function (){
/******************************************* User Routes **********************************/
    Route::get('/user/users', 'UsersController@index');
    Route::get('/user/edit/{user}', 'UsersController@edit');
    Route::get('/user/delete/{user}', 'UsersController@delete');
    Route::post('/user/update/{user}', 'UsersController@update');

/******************************************* Teachers Routes **********************************/
    Route::get('/teacher/edit/{teacher}', 'TeachersController@edit');
    Route::get('/teacher/create', 'TeachersController@create');
    Route::resource('/teacher', 'TeachersController');
/******************************************* Event Routes **********************************/
    Route::get('/event/events', 'EventsController@index');
    Route::get('/event/create', 'EventsController@create');
    Route::post('/event/store', 'EventsController@store');
    Route::get('/event/edit/{event}', 'EventsController@edit');
    Route::post('/event/update/{event}', 'EventsController@update');
    Route::get('/event/delete/{event}', 'EventsController@destroy');

/******************************************* Member Routes **********************************/
    Route::get('/member/members', 'MembersController@index');
    Route::get('/member/show/{id}', 'MembersController@show');
    Route::get('/member/create/{user_id}', 'MembersController@create');
    Route::post('/member/store', 'MembersController@store');
    Route::get('/member/edit/{id}', 'MembersController@edit');
    Route::post('/member/update/{member}', 'MembersController@update');
    Route::get('/member/delete/{member}', 'MembersController@destroy');

/******************************************* Student Routes **********************************/
    Route::get('/student/students', 'StudentsController@index');
    Route::get('/student/show/{id}', 'StudentsController@show');
    Route::get('/student/create', 'StudentsController@create');
    Route::post('/student/store', 'StudentsController@store');
    Route::get('/student/edit/{student}', 'StudentsController@edit');
    Route::post('/student/update/{student}', 'StudentsController@update');
    Route::get('/student/delete/{student}', 'StudentsController@destroy');

/******************************************* Dashboard Routes **********************************/
    Route::get('/dashboard', 'DashboardController@dashboard');
    Route::get('/settings', 'DashboardController@settings');
    Route::get('/hostel', 'DashboardController@hostel');
    Route::get('/teachers', 'DashboardController@teachers');
    Route::get('/hostel/member/{member}', 'DashboardController@member_show');
});


Route::namespace('Teacher')->prefix('teacher')->middleware(IsTeacher::class)->group(function(){
    Route::get('/home', 'TeachersController@home');
    Route::get('/attendance/home', 'AttendanceController@home');
    Route::get('/attendance/all/{course}', 'AttendanceController@all_attendance');
    Route::post('/attendance/review', 'AttendanceController@review');
    Route::get('/attendance/update', 'AttendanceController@update');
    Route::post('/attendance/sheet', 'AttendanceController@sheet');
    Route::get('/attendance/delete', 'AttendanceController@delete');
});


Route::namespace('Student')->prefix('student')->middleware(IsStudent::class)->group(function (){
     Route::get('/home', 'StudentsController@home');
     Route::get('/attendance', 'StudentsController@attendance');
     Route::get('/attendance/all/{course}', 'StudentsController@all_attendance');
     Route::get('/attendance/show/', 'StudentsController@show');
     Route::get('/form/create', 'StudentsController@create_form');
     Route::get('/form/submit', 'StudentsController@form_submit');
     Route::get('/form/check', 'StudentsController@check');
        

});


Route::get('test', function(){
    $attendance = Attendance::where();
    return view('test', compact('users'));
});

Route::get('halim', 'TestController@check');

Route::namespace('Library')->prefix('library')->group(function (){
    Route::get('/home', 'LibraryController@index');
    Route::get('/book/show/{book}', 'LibraryController@show');
});


