@extends('layouts.principal')

@section('contenido')
<div class="row">
  <h1 class="light-blue-text text-darken-4"> Nuevo Producto </h1>
</div>

<div class="row">
    <form method="POST" action="{{ route('productos.store') }}" class="col s12">
      @csrf
      <div class="row">
        <div class="input-field col s8">
          <input placeholder="Nombre del Producto" id="nombre" type="text" class="validate" name="nombre">
          <label for="first_name">Nombre de Producto</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s8">
        <textarea id="desc" class="materialize-textarea" name="desc"></textarea>
        <label for="desc">Descripción</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s18">
          <input id="precio" type="number" class="validate" name="precio">
          <label for="precio">Precio</label>
        </div>
      </div>
      <div class="row">
      <div class="file-field input-field col s8">
      <div class="btn light-blue darken-4">
        <span>Imagen de Producto...</span>
        <input type="file" name="imagen">
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
    </div>
      </div>
      <div class="row">
      <div class="input-field col s8">
      <select name="categoria">
      <option value="" disabled selected>Elija Categoria</option>
      @foreach($categorias as $categoria)
      <option value="{{ $categoria->id }}">{{ $categoria->nombre}}</option>
      @endforeach
    </select>
    <label>Categorias Disponibles</label>
      </div>
     </div>
     <div class="row">
      <div class="input-field col s8">
      <select name="marca">
      <option value="" disabled selected>Elija Marca</option>
      @foreach($marcas as $marca)
      <option value="{{ $categoria->id }}">{{ $marca->nombre}}</option>
      @endforeach
    </select>
    <label>Marcas Disponibles</label>
      </div>
     </div>
      <div class="row">
      <button class="btn waves-effect waves-light light-blue darken-4" type="submit">Guardar
      </button>
      </div>
    </form>
  </div>
  @endsection