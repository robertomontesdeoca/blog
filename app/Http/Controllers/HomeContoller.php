<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeContoller extends Controller
{
    //
    public function __invoke(){
        return "Bienvenido a la pagina principal";
    }
}
