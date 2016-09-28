<?php
use App\Post;
use Carbon\Carbon;

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
	return "Bem vindo à API REST do  you party";
});

// rotas sobre comentários
Route::get('/comments', 'CommentController@getComments');
Route::get('/postcomments/{id}', 'CommentController@getCommentByPost');
Route::post('savecomment', 'CommentController@saveComment');


// rotas sobre posts

Route::get('/posts', 'PostController@getAll');
Route::post('/savepost', 'PostController@save');
Route::delete('/destroypost', 'PostController@destroy');
Route::get('/postlikes', 'PostController@getAllLikes');


// Rotas sobre usuários

Route::get('/userposts', 'UserController@getPosts');
Route::post('/login', 'UserController@doLogin');
Route::get('/logout', 'UserController@doLogout');
Route::post('/createlogin', 'UserController@createLogin');