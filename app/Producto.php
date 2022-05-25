<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = 'productos';
    protected $fillable = ['nombre', 'codigo','descripcion', 'imagen', 'precio', 'idestado', 'idcategoria'];
    public $timestamps = false;


        public function categorias()
    {
        return $this->belongsTo('App\Categoria','idcategoria');
   
    }    

        public function comments()
    {
        return $this->hasMany('App\Comment','post_id');
    } 

        public function scopeBuscador($query,$nombre)
    {
        return $query->where('nombre','LIKE','%'.$nombre.'%');
    }
    public function scopeBuscador1($query,$codigo)
    {
        return $query->where('codigo','LIKE','%'.$codigo.'%');
    }

}
