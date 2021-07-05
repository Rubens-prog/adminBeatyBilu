@extends('template')
@section('main')

<h1>Editar Início</h1>

@if(session('Done'))
    <div class="alert alert-success"> 
        {{ session('Done') }}
    </div>
@endif


<form action="/admin/inicio/update?id={{$inicio->id}}" method="post">
@csrf

  <div class="form-group">
    <label >Título</label>
    <input type="text" class="form-control" name="title" value="{{$inicio->title}}" required>
  </div>
  <div class="form-group">
    <label >Texto</label>
    <textarea type="text" class="form-control" name="text" required>{{$inicio->text}}</textarea>
  </div>
  <div class="form-group">
    <label >Imagem</label>
    <input type="text" class="form-control" name="img" required value="{{$inicio->img}}">
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>

@stop