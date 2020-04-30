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


Route::pattern('id', '[0-9]+');
//
////Route::get('/', function () {
////    return view('site.index');
////})->name('home');
//
//Route::get('/about', function () {
//    return view('site.about');
//})->name('about');
//
//Route::get('/contact', function () {
//    return view('site.contact');
//})->name('contact');
//
//
//;
//
////Route::get('/home', 'HomeController@index')->name('home');
//
//
//Route::get('/test', 'TGController@test');

Auth::routes(['reset']);
Route::group(['middleware'=>'auth'],function (){
    //Home Route
    Route::get('/home','WelcomeController@index')->name('welcome');
    Route::get('/','WelcomeController@index')->name('welcome');
    //Dashboard Route For Admin Only
    Route::get('/admin/dashboard','WelcomeController@dashboard')->name('admin.dashboard');

    //User Route
    Route::get('/user','UserController@index')->name('user.index');
    Route::get('/user/create','UserController@create')->name('user.create');
    Route::post('/user/create','UserController@store')->name('user.store');
    Route::get('/user/edit/{id}','UserController@edit')->name('user.edit');
    Route::put('/user/edit/{id}','UserController@update')->name('user.update');
    Route::get('/user/account','UserController@account')->name('user.account');
    Route::put('/user/account/security','UserController@security')->name('user.security');
    Route::post('/user/message/{id}','UserController@sendTelegramMessage')->name('user.telegram');
    Route::get('/user/subscribe','UserController@subscribe')->name('user.subscribe');
    Route::delete('/user/{id}','UserController@destroy')->name('user.destroy');
    //Job Route
    Route::get('/job','JobController@index')->name('job.index');
    Route::get('/job/show-all','JobController@showAll')->name('job.show');
    Route::get('/job/show/{id}','JobController@show')->name('job.details');
    Route::get('/job/create-annual','JobController@create_annual_job')->name('job.create.annual');
    Route::get('/job/create-daily','JobController@create_daily_job')->name('job.create.daily');
    Route::post('/job/create-annual','JobController@store_annual_job')->name('job.store.annual');
    Route::post('/job/create-daily','JobController@store_daily_job')->name('job.store.daily');
    Route::get('/job/edit-annual/{id}','JobController@edit_annual_job')->name('job.edit.annual');
    Route::get('/job/edit-daily/{id}','JobController@edit_daily_job')->name('job.edit.daily');
    Route::put('/job/edit-annual/{id}','JobController@update_annual_job')->name('job.update.annual');
    Route::put('/job/edit-daily/{id}','JobController@update_daily_job')->name('job.update.daily');
    Route::delete('/job/{id}','JobController@destroy')->name('job.destroy');
    Route::post('/job/{id}','JobController@status')->name('job.status');
//   Broadcast Route
//    Route::get('/broadcast/show/{id}','BroadcastController@show')->name('broadcast.details');
    Route::post('/broadcast/status/{id}','BroadcastController@status')->name('broadcast.status');
//    Route::post('/broadcast/subscribe','UserController@subscribe')->name('broadcast.subscribe');

    Route::post('/broadcast/{id}','BroadcastController@broadcast')->name('broadcast.broadcast');

    Route::resource('/broadcast','BroadcastController');
});
