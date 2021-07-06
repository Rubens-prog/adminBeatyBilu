@extends('template')
@section('main')

<h1>Editar Serviços</h1>

<form action="/admin/servicos/update?id={{$servico->id}}" method="post">
@csrf

  <div class="form-group">
    <label >Título</label>
    <input type="text" class="form-control" name="title" value="{{$servico->title}}" required>
  </div>
  <div class="form-group">
    <label >Texto</label>
    <textarea type="text" class="form-control" name="text" required>{{$servico->text}}</textarea>
  </div>
  <div class="form-group">
    <label >Imagem</label>
    <input type="text" class="form-control" name="icon" required value="{{$servico->icon}}">
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>


@stop