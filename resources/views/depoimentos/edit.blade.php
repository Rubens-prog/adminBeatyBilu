@extends('template')
@section('main')

<h1>Editar Depoimentos</h1>

<form action="/admin/depoimentos/update?id={{$testimonial->id}}" method="post" style="margin-top:5rem;">
@csrf
  <div class="form-group">
    <label>Título:</label>
    <input type="text" class="form-control" name="text" required value="{{$testimonial->text}}">
  </div>
  <div class="form-group">
    <label>Texto:</label>
    <textarea type="text" class="form-control" name="name"  required >{{$testimonial->name}}</textarea>
  </div>
  <div class="form-group">
    <label>Imagem:</label>
    <input type="text" class="form-control" name="img" required value="{{$testimonial->img}}">
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>

@stop