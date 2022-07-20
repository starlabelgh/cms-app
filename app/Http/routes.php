<?php
use App\Post;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/about', function () {
//     return "welcome to about page";
// });

// Route::get('/contact', function () {
//     return "welcome to contacts page";
// });

// Route::get('/post/{id}/{name}', function ($id, $name) {
//     return "This is my first post ". $id ." ". $name;
// });

Route::get('/post/', 'PostsController@index');
Route::get('/contact/', 'PostsController@contact');


// ELOQUENT

Route::get('/find', function(){

    $post = Post::all();

    foreach($posts as $post ){
        return $post->$title;
    }
});