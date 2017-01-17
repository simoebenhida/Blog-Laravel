<?php
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', [
'uses' => 'HomeController@index',
'as' => 'home'
]);
Route::group(['middleware' => ['etre_connecter']], function () {
  Route::get('/login',[
    'uses' => 'UserController@login',
    'as' => 'login'
  ]);
  Route::post('/login',[
    'uses' => 'UserController@post_login',
    'as' => 'post_login'
  ]);
  Route::get('/register',[
    'uses' => 'UserController@register',
    'as' => 'register'
  ]);
  Route::post('/register',[
    'uses' => 'UserController@post_register',
    'as' => 'post_register'
  ]);

});
Route::get('/logout',[
  'uses' => 'UserController@logout',
  'as' => 'logout'
]);
