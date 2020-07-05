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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/**
 *
 * Route for admin panel
 *
 */

Route::resource('dashboard', 'PostController');


	Route::get('/post/unpublish/{id}', [
		'uses'	=> 'PostController@unpublish',
		'as'	=> 'unpublish-post'
	]);

	Route::get('/post/publish/{id}', [
		'uses'	=> 'PostController@publish',
		'as'	=> 'publish-post'
	]);


	Route::get('/post/to-section-one/{id}', [
		'uses'	=> 'PostController@to_section_one',
		'as'	=> 'to-section-one'
	]);

	Route::get('/post/to-section-two/{id}', [
		'uses'	=> 'PostController@to_section_two',
		'as'	=> 'to-section-two'
	]);
/**
 *
 * Route for Ajax
 *
 */
	Route::get('/ajax-title-check/', [
		'uses'	=> 'PostController@ajaxTitleCheck',
		'as'	=> 'ajax-title-check'
	]);

/**
 *
 * Route for front end
 *
 */
Route::get('/', [
	'uses'	=> 'FrontEndController@index',
	'as'	=> 'home'
]);

Route::get('/single/{url}', [
	'uses'	=> 'FrontEndController@single',
	'as'	=> 'single-page'
]);