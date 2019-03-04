<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PublicacionesModel extends Model
{

    public function UsuariosModel()
    {
        return $this->belongsTo('App\UsuariosModel', 'foreign_key');
        
    }
    public function com_publicaciones()
{
    return $this->belongsTo('App\com_publicaciones', 'foreign_key');
}


    protected $table='publicaciones';
}
