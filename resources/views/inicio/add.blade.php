@extends('template')
@section('main')

<h1>Administração Início</h1>

@if(session('Done'))
    <div class="alert alert-success"> 
        {{ session('Done') }}
    </div>
@endif


<form action="/admin/inicio/salva" method="post">
@csrf

  <div class="form-group">
    <label >Título</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label >Texto</label>
    <textarea type="text" class="form-control" name="text" required></textarea>
  </div>
  <div class="form-group">
    <label >Imagem</label>
    <input type="text" class="form-control" name="img" required>
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

@stop