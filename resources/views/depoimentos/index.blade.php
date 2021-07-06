@extends('template')
@section('main')
<h1>Depoimentos</h1>

@if(session('Done'))
    <div class="alert alert-success"> 
        {{ session('Done') }}
    </div>
@endif

<a style="margin-top:5rem;" href="/admin/depoimentos/adicionar" class="btn btn-primary"><i class="fas fa-plus mr-1"></i>Novo</a>

<table class="table mt-5 table-striped" >
    <thead class="thead-dark">
        <tr>
            <th>Texto</th>
            <th>Nome</th>
            <th>img</th>    
            <th>Ações</th>    
        </tr>
    </thead>
    <tbody>
    @foreach( $dados as $dado)
          <tr>    
            <td>{{Str::of($dado->text)->limit(40)}}</td>
            <td>{{Str::of($dado->name)->limit(40)}}</td>
            <td>{{Str::of($dado->img)->limit(40)}}</td>
            <td>
            <a href="/admin/depoimentos/edita?id={{$dado->id}}" class="btn btn-secondary"><i class="fas fa-pen ml-2 mr-2"></i></a>
            <a href="/admin/depoimentos/delete?id={{$dado->id}}" onclick="return confirm('Deseja excluir o produto?')" class="btn btn-danger"><i class="far fa-trash-alt ml-2 mr-2"></i></a>
            </td>
          </tr>
    @endforeach
    </tbody>
</table>

@stop