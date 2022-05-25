<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $guarded = ['id'];

    public function producto()
    {
        return $this->belongsTo('App\Producto');
    }
}
