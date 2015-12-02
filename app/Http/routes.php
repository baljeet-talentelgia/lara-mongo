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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mongo', function(){

	/*App\Book::create(['name' => 'MongoDB Pro', 'author' => 'Dwight Merriman']);*/
	
	/*$book = App\Book::find('565e8d2d071a58a5788b4570');
	$book->author = 'Misko Hevery';
	$book->name = 'Fundamentals Of Angular JS';
	$book->save();*/
	//$book->delete();

	$books = App\Book::all()->toArray();
	echo '<pre>';
	print_r($books);
	return 'Hello Sir!!';
});

