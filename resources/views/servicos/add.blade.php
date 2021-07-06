@extends('template')
@section('main')

<h1>Adiministração Serviços</h1>

@if(session('Done'))
    <div class="alert alert-success"> 
        {{ session('Done') }}
    </div>
@endif


<form action="/admin/servicos/salva" method="post">
@csrf

  <div class="form-group">
    <label>Título:</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label>Texto:</label>
    <textarea type="text" class="form-control" name="text" required></textarea>
  </div>
  <div class="form-group">
    <label>Icone:</label>
    <input type="text" class="form-control" name="icon" required>
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>


@stop