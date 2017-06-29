<?php


Route::get('/', 'PostsController@index');
Route::get('/posts/{post}', 'PostsController@show');
Route::get('/create','PostsController@create');
Route::post('/posts', 'PostsController@store');

Route::post('/posts/tags/{tag}', 'CommentsController@index');
Route::post('/posts/{post}/comments', 'CommentsController@store');

Route::get('/register', "RegistrationController@create");
Route::post('/register', "RegistrationController@store");

Route::get('/login', "SessionsController@create");
Route::post('/login', "SessionsController@store");
Route::get('/logout', "SessionsController@destroy");