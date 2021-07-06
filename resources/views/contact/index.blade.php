@extends('template')
@section('main')

<h1>Contatos</h1>


@if(session('Done'))
    <div class="alert alert-success"> 
        {{ session('Done') }}
    </div>
@endif

<a style="margin-top:5rem;" href="/admin/contato/adicionar" class="btn btn-primary"><i class="fas fa-plus mr-1"></i>Novo</a>

<table class="table mt-5 table-striped">
    <thead class="thead-dark">
        <tr>
        <th>Texto</th>
            <th>Telefone</th>
            <th>Endereço</th>    
            <th>Email</th>    
            <th>Ações</th>     
        </tr>
    </thead>
    <tbody >
    @foreach($dados as $dado)
          <tr>    
            <td>{{Str::of($dado->text)->limit(40)}}</td>
            <td>{{$dado->phone}}</td>
            <td>{{Str::of($dado->adress)->limit(40)}}</td>
            <td>{{$dado->email}}</td>
            <td>
            <a href="/admin/contato/edita?id={{$dado->id}}" class="btn btn-secondary"><i class="fas fa-pen ml-2 mr-2"></i></a>
            <a href="/admin/contato/delete?id={{$dado->id}}" onclick="return confirm('Deseja excluir o produto?')" class="btn btn-danger"><i class="far fa-trash-alt ml-2 mr-2"></i></a>
            </td>
          </tr>
     @endforeach
    </tbody>
</table>


@stop