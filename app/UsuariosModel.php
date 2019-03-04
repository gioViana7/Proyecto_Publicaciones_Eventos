<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UsuariosModel extends Model
{   
    
    public function PublicacionesModel()
    {
        return $this->hasMany('App\PublicacionesModel', 'foreign_key');
    }
    public function EventosModel()
    {
        return $this->hasMany('App\EventosModel', 'foreign_key');
    }


    protected $table='usuarios';
}
