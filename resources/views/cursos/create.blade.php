@extends('layouts.plantilla')
@section('title','Cursos create')
    
@section('content')
    <h1>En esta pagina podras crear un curso</h1>
    <br>
    <form action="{{route('cursos.store')}}" method="POST">
      @csrf
        <label>
        Nombre:
        <br>
        <input type="text" name="name" value="{{old('name')}}">
      </label>

      @error('name')
          <br>
          <small>*{{$message}}</small>
          <br>
      @enderror

        <br>
      <label>
        Descripcion:
        <input type="text" name="descripcion" value="{{old('descripcion')}}">
      </label>
      @error('descripcion')
      <br>
      <small>*{{$message}}</small>
      <br>
  @enderror

        <br>
      <label for="">
        Categoria:
        <input type="text" name="categoria" value="{{old('categoria')}}">
      </label>
      @error('categoria')
      <br>
      <small>*{{$message}}</small>
      <br>
  @enderror

       <br>
      <button type="submit">Enviar Formulario</button>
    </form>
@endsection
