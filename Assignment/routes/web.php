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


Route::get('/',               'PagesController@index');
Route::get('/index',               'PagesController@index');
Route::get('/contact-us',           'PagesController@contactUs');
Route::POST('/contact-us',[
    'uses'=>'ContactController@store',
    'as'=>'contact.store'
]);


Route::get('/about-us',          'PagesController@aboutUs');
Route::get('/courses',             'PagesController@courses');
Route::get('/college-info',          'PagesController@collegeInfo');
Route::get('/staffs',             'PagesController@staffs');
Route::get('/current-student',          'PagesController@currentStudent');
Route::get('/pathways',             'PagesController@pathways');




Route::group(['middleware'=>'auth'],function(){

    Route::get('/json/user', function () {
        return App\User::all();
    });
    Route::get('/json/contact', function () {
        return App\Contact::all();
    });



});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');
