<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursoContoller extends Controller
{
    //
    public function index(){
        return "Bienvenido a la pagina cursos ";
    }
    public function create(){
        return "En esta pagina podras crear un formulario ";
    }
    public function show($curso){
        return "Bienvenido al curso: $curso";
    }
}
