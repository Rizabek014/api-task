<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api;

Route::get('/news/{id}', '\App\Http\Controllers\Api\NewsController@show'); //get news by ID
Route::get('/news/header/{header}', '\App\Http\Controllers\Api\NewsController@newsHeader'); //get news by Header
Route::get('/news/author/{id}', '\App\Http\Controllers\Api\NewsController@author'); //get news by Author
Route::get('/news/rubric/{id}', '\App\Http\Controllers\Api\NewsController@rubric'); //get news by Rubric
Route::get('/news/rubrics/{id}', '\App\Http\Controllers\Api\NewsController@rubrics'); //get news by Rubric and Child Rubric
Route::get('/authors', '\App\Http\Controllers\Api\AuthorsController@index'); //get All Authors

Route::post('/add/news', '\App\Http\Controllers\Api\NewsController@store'); //Add news
Route::post('/add/author', '\App\Http\Controllers\Api\AuthorsController@store'); //Add authors
Route::post('/add/rubric', '\App\Http\Controllers\Api\RubricsController@store'); //Add rubrics
