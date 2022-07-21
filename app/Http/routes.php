<?php
use App\Post;
use App\User;
use App\Photo;
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

// Route::get('/post/', 'PostsController@index');
// Route::get('/contact/', 'PostsController@contact');


// ELOQUENT

// Route::get('/find', function(){

//     $post = Post::all();

//     foreach($posts as $post ){
//         return $post->$title;
//     }
// });

Route::get('/findwhere', function(){
    $post = Post::where('id', 2)->orderBy('id', 'desc')->take(1)->get();

    return $post;
});


Route::get('/findmore', function(){
    $posts = Post::FindorFail(1);

    return $posts;

    $posts = Post::where('user_count', '<', 50)->firstOrFail();

});

Route::get('/basicinsert', function(){
    $post = new Post;

    $post->title = 'New Elequent title insert';
    
});

Route::get('user/photos', function(){
    //polymorphic relations

    $user = User::find(1);

    foreach($user->photos as $photo){
        return $photo;
    };
});

Route::get('post/photos', function(){
    //polymorphic relations

    $post = Post::find(1);

    foreach($post->photos as $photo){
        return $photo;
    };
});

Route::get('photo/{id}/post', function($id){
    $photo = Photo::findOrFail($id);

    return $photo->imageable;
});

//Polymorphic Many to Many

Route::get('/post/tag', function(){
    $post = Post::find(1);

    foreach($post->tags as $tag){
        echo $tag->name;
    }
});

Route::get('/tag/post', function(){
    $tag = Tag::find(2);
    foreach($tag->posts as $post){
        echo $post->title;
    }
});


 

