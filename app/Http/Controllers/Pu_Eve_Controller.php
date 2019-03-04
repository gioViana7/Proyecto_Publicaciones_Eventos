<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pu_Eve_Controller extends Controller
{
    public function insert(){

        $productos=PublicacionesModel::all();
    
        return view('',['registros'=>$publicaciones]);
    
    }
    public function modificar(){
        
    }
    public function eliminar(){
        
    }
    public function listar(){
        
    }
}
