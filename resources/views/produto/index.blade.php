@extends('layouts.master')

@section('title','Produtos')

@section('pager-header-content','Produtos')

@section('content')

  <div class="row">
    <div class="col-md-3">
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h3 class="panel-title">Ações</h3>
        </div>

        <div class="panel-body">
          <a href="/produtos/cria">
            <span class="glyphicon glyphicon-plus">Produtos</span>          </a>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
          </tr>
        </thead>

        <tbody>
          @foreach ($produtos as $produto)
          <tr>
            <td>{{ $produto->id }}</td>
            <td>{{ $produto->nome }}</td>
            <td>{{ $produto->preco }}</td>
          </tr>  
          @endforeach
        </tbody>
      </table>

    </div>

  </div>

@endsection
