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
/*

*/
/*
Route::get('/log', function () {
    return view('welcome');
});



Route::get('/', function () {
    return view('index');
});
*/

Route::get('/', 'showDataController@index');

Route::get('/details/{course}', 'showCourseController@show')->name('course.show');
//Route::get('/details/{course}', [showCourseController::class,'show'])->name('course.show');

/*Route::get('/course', function () {
    return view('course');
});  */

//User Ahtenticaion 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route for Controller CRUD Affiliations
Route::resource('affiliations', 'AffiliationsController');

//Route for headers Controller CRUDS
Route::resource('headers','headerController');

//Route for announcemetns Controller CRUDS
Route::resource('announcements','announcementsController');

//Route for Gallery Controller CRUDS
Route::resource('gallery','galleryController');

//Route for Abouts Controller CRUDS
Route::resource('abouts','aboutsController');

//Route for Contacts Controller CRUDS
Route::resource('contacts','contactsController');

//Route for Courses Controller CRUDS
Route::resource('courses','coursesController');


//feedbacks controllers
Route::get('feedbacks','feedbackController@create')->name('feedbacks.create');
Route::post('feedbacks','feedbackController@store')->name('feedbacks.store');
