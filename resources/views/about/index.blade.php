@extends('template')
@section('main')
<h1>Administração sobre</h1>


<form action="/sobre/salva">
@csrf

  <div class="form-group">
    <label >Título</label>
    <input type="text" class="form-control" name="title">
  </div>
  <div class="form-group">
    <label >Texto</label>
    <input type="text" class="form-control" name="text">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@stop