@extends('template')
@section('main')

<h1>Administração Contato</h1>


<form action="/admin/contato/salva" method="post">
@csrf

  <div class="form-group">
    <label >Text:</label>
    <textarea type="text" class="form-control" name="text"></textarea>
  </div>
  <div class="form-group">
    <label >Telefone:</label>
    <input type="text" class="form-control" id="phone" name="phone" required>
  </div>
  <div class="form-group">
    <label >Endereço:</label>
    <input type="text" class="form-control" name="adress" required>
  </div>
  <div class="form-group">
    <label >Email:</label>
    <input type="email" class="form-control" name="email" required>
  </div>
  <button type="submit" class="btn btn-primary">Salvar</button>
</form>

<script>
  $("#phone").mask("(99)99999-9999");
</script> 

@stop