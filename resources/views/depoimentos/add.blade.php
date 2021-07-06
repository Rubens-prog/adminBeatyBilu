@extends('template')
@section('main')

<h1>Administração Depoimentos</h1>

@if(session('Done'))
    <div class="alert alert-success"> 
        {{ session('Done') }}
    </div>
@endif


<form action="/admin/depoimentos/salva" method="post">
@csrf

  <div class="form-group">
    <label >Texto:</label>
    <textarea type="text" class="form-control" name="text"></textarea>
  </div>
  <div class="form-group">
    <label>Nome:</label>
    <input type="text" class="form-control" name="name" required>
  </div>
  <div class="form-group">
    <label >Imagem:</label>
    <input type="text" class="form-control" name="img" required>
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

@stop