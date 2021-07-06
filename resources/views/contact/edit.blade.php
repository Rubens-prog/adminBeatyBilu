@extends('template')
@section('main')

<h1>Administração Contato</h1>

<form action="/admin/contato/update?id={{$contato->id}}" method="post">
@csrf

  <div class="form-group">
    <label>Text:</label>
    <textarea type="text" class="form-control" name="text">{{$contato->text}}</textarea>
  </div>
  <div class="form-group">
    <label>Telefone:</label>
    <input type="text" class="form-control" name="phone" id="phone" required value="{{$contato->phone}}">
  </div>
  <div class="form-group">
    <label>Endereço:</label>
    <input type="text" class="form-control" name="adress" required value="{{$contato->adress}}"> 
  </div>
  <div class="form-group">
    <label>Email:</label>
    <input type="email" class="form-control" name="email" required value="{{$contato->email}}">
  </div>
  <button type="submit" class="btn btn-primary">Editar</button>
</form>

<script>
  $("#phone").mask("(99)99999-9999");
</script> 
@stop