<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', function()
{
	return View::make('home')->with('menuSelection', 'home');
});

Route::get('galeria', function()
{
    return View::make('galeria')->with('menuSelection', 'galeria');
});

Route::get('miruta', function(){
   return "hola";
});

Route::get('blog/{catselected?}', function($catselected = null){

    $categorias = Categoria::all();

    if($catselected == null){
        $posts = Post::all();
    }
    else{
        $currentCat = Categoria::where('id', '=', $catselected)->firstOrFail();
        $posts = $currentCat->getPosts()->get();
    }


    return View::make('blog')->with('categorias', $categorias)->with('menuSelection', 'blog')->with('posts', $posts);
});


