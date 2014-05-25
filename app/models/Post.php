<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class Post extends Eloquent {

    public $incrementing = false;

    public function getNombre()
    {
        return $this->titulo;
    }

    public function getContenido()
    {
        return $this->contenido;
    }

    public function getFecha()
    {
        return $this->created_at;
    }

    public function getImagen()
    {
        return $this->imagen;
    }

    public function getCategorias()
    {
        return $this->belongsToMany('Categoria', 'categoria_post');
    }

    public function getComentarios()
    {
        return $this->hasMany('Comentario', 'post');
    }


}