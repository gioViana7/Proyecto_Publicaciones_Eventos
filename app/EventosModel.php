<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventosModel extends Model
{

    public function UsuariosModel()
    {
        return $this->belongsTo('App\UsuariosModel', 'foreign_key');
        
    }

    public function com_eventosModel()
    {
        return $this->belongsTo('App\comeventosModel','foreign_key');
    }


    protected $table='eventos';
}
