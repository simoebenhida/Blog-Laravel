<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [
'uses' => 'HomeController@index',
'as' => 'home'
]);

Route::get('/login',[
  'uses' => 'UserController@login',
  'as' => 'login'
]);

Route::get('/register',[
  'uses' => 'UserController@register',
  'as' => 'register'
]);

Route::post('/register',[
  'uses' => 'UserController@post_register',
  'as' => 'post_register'
]);
