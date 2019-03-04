<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class com_publicacionesModel extends Model
{

    public function PublicacionesModel()
    {
        return $this->hasMany('App\PublicacionesModel', 'foreign_key');
    }



    protected $table='com_publicaciones';
}
