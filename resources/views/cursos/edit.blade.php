@extends('layouts.plantilla')
@section('title','Cursos edit')
    
@section('content')
    <h1>En esta pagina podras editar un curso</h1>
    <br>
    <form action="{{route('cursos.update', $curso)}}" method="POST">
     
      @csrf
      @method('put')

        <label>
        Nombre:
        <input type="text" name="name"  value="{{old('name',$curso->name)}}" >
      </label>
      @error('name')
          <br>
          <small>*{{$message}}</small>
          <br>
      @enderror
        <br> 

      <label>
        Descripcion:
        <input type="text" name="descripcion" value="{{old('descripcion',$curso->descripcion)}}" >
      </label>
      @error('descripcion')
      <br>
      <small>*{{$message}}</small>
      <br>
      @enderror

        <br>
      <label for="">
        Categoria:
        <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}" >
      </label>
      @error('categoria')
      <br>
      <small>*{{$message}}</small>
      <br>
  @enderror
       <br>
      <button type="submit">Actualizar Formulario</button>
    </form>
@endsection
