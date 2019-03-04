<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class com_eventosModel extends Model
{

    public function EventosModel()
    {
        return $this->hasMany('App\EventosModel', 'foreign_key');
    }

    protected $table='com_eventos';
}
