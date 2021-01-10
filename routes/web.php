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

Route::get('/','FilmController@index')->name('home');
Route::get('/film/{id?}','FilmController@film');
Route::get('/category','FilmController@category');
Route::get('/category/{name?}','FilmController@getCategory');
Route::get('/expectedMovies','FilmController@expectedMovies');
Route::get('/new_films','FilmController@newFilms');

Route::get('/add-recomendation/{id}/{user}','RecommendationController@addRecommendation');
Route::get('/bookmarks','RecommendationController@bookmarks');

Route::get('/recommendation','RecommendationController@Recommendation');

Route::get('/actor/{id}','ActorController@index');

Auth::routes();
// Auth::logout();

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

