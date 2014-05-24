<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Categoria extends Eloquent {

    public function getNombre()
    {
        return $this->id;
    }

    public function getPosts()
    {
        return $this->belongsToMany('Post', 'categoria_post');
    }

}

App::error(function(ModelNotFoundException $e)
{
    return Response::make('Not Found', 404);
});