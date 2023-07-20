@extends('layouts.plantilla')

@section('title','Cursos'.$curso->name)
    
@section('content')
    <h1>Bienvenido al curso {{$curso->name}}</h1>
    <a href="{{route('cursos.index')}}">Volver al cursos</a>
    <br>
    <a href="{{route('cursos.edit',$curso)}}">Editar los Curso</a>
    <p><strong>Categoria:</strong>{{$curso->categoria}}</p>
     <p>{{$curso->descripcion}}</p>

     <form action="{{route('cursos.destroy', $curso)}}" method="POST">
        @csrf
        @method('delete');
        <button type="submit">Eliminar</button>
     </form>
@endsection

