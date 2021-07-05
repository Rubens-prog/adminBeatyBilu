@extends('template')
@section('main')



<form action="/admin/sobre/update?id={{$sobre->id}}" method="post" style="margin-top:5rem;">
@csrf
  <div class="form-group">
    <label >Título</label>
    <input type="text" class="form-control" name="title" required value="{{$sobre->title}}">
  </div>
  <div class="form-group">
    <label >Texto</label>
    <textarea type="text" class="form-control" name="text"  required >{{$sobre->text}}</textarea>
  </div>
  <div class="form-group">
    <label >Imagem</label>
    <input type="text" class="form-control" name="img" required value="{{$sobre->img}}">
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>

@stop