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

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');
Route::get('/view', 'PagesController@view');
Route::resource('posts','PostController');
Route::resource('users','UsersController');
Route::resource('user_info','User_InfoController');
//Route::resource('/user_info/view','User_InfoController@views');
Route::resource('/users/add','UsersController@view');
Route::resource('contact','ContactController');
Route::resource('program','ProgramController');
Route::resource('/program/display','ProgramController@display');
Route::resource('assignment','AssignmentController');
Route::resource('classes','ClassesController');
Route::resource('expense_sheet','ExpenseSheetController');
Route::resource('time_sheet','TimeSheetController');
Route::resource('graded','GradedController');
Route::resource('dues','DuesController');
Route::get('/user_info/view', function () {
    return view('pages.about');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
