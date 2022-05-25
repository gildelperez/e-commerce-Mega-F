<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    
    protected $table = 'bitacoras';
    protected $fillable = ['id_pedido','id_user','ubicacion','descripcion','soporte'];
 

public function user()
    {
        return $this->belongsTo('App\User','id_user');
   
      
    }    
    
    //Funcion pra buscar pedido
    public function scopeBuscador($query,$id_pedido){
        return $query->where('id_pedido','LIKE','%'.$id_pedido.'%');
    }
   

    
}