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
Route::group(['middleware' => ['web']], function () {

  /*
  * This is the landing page.
  * The page handles authentication of the user
  */
  Route::get('/', function () {
      return view('auth/login');
  });

  Auth::routes();
/*
* This is route of the page the user is directed to after signup.
* I have not added 'middleware'=>'auth' to the route because we have not handled authentication
*/
  Route::get('/interest',[
    'uses'=>'InterestController@index',
    'as'=>'interest'
  ]);

});
