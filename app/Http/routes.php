<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Category;

Route::get('/', function () {
	$cat = Category::all();
    return view('welcome',compact('cat'));
});
Route::get('/categories', 'HomeController@cat');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');
Route::post('/profile' , 'HomeController@update_avatar');
Route::get('/users', 'HomeController@users');
Route::delete('/user/{user}' , 'HomeController@destroy');
Route::patch('/user/{user}/edit' , 'HomeController@update');

Route::resource('cat' , 'CategoryController');



Route::get('/adminPage', 'VerifyController@admin');
Route::get('/admin/tables', 'VerifyController@tables');
Route::get('/admin/cats', 'VerifyController@cats');
// Route::get('/admin/cat/add', 'VerifyController@add_cat');


	




// Route::get('/', function () {
//     return view('admin.index');
// });
// Route::get('/', function () {
//     return view('admin.index');
// });
