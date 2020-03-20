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

Route::get('/welcome', 'welcomeController@index');

Route::get('/projects', 'ProjectsController@index');

Route::get('/certificates', 'CertificatesController@index');

Route::get('/about', 'AboutController@index');

Route::get('/contact', 'ContactController@index');

Route::get('/courses', 'CoursesController@index');

Route::get('/skills', 'SkillsController@index');

Route::get('/logout', 'LogoutController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
