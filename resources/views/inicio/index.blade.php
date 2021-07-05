@extends('template')
@section('main')

<h1>Administração Início</h1>

@if(session('Done'))
    <div class="alert alert-success"> 
        {{ session('Done') }}
    </div>
@endif

<a style="margin-top:5rem;" href="/admin/inicio/adicionar" class="btn btn-primary"><i class="fas fa-plus mr-1"></i>Novo</a>

<table class="table mt-5 table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Título</th>
            <th>Texto</th>
            <th>img</th>    
            <th>Ações</th>    
        </tr>
    </thead>
    <tbody>
        @foreach($dados as $dado)
          <tr>    
            <td>{{$dado->title}}</td>
            <td>{{$dado->text}}</td>
            <td>{{$dado->img}}</td>
            <td>
            <a href="/admin/inicio/edita?id={{$dado->id}}" class="btn btn-secondary"><i class="fas fa-pen ml-2 mr-2"></i></a>
            <a href="/admin/inicio/delete?id={{$dado->id}}" onclick="return confirm('Deseja excluir o produto?')" class="btn btn-danger"><i class="far fa-trash-alt ml-2 mr-2"></i></a>
            </td>
          </tr>
        @endforeach
    </tbody>
</table>

@stop