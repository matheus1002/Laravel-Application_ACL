@extends('adminlte::page')

@section('title', 'AdminLTE - Editar Papel')

@section('content_header')
    <h1>Editar Papel</h1>
    <ol class="breadcrumb">
        <li>
            <a href="/admin">
                Início
            </a>
        </li>
        <li>
            <a href="/admin/papeis">
                Papéis
            </a>
        </li>
        <li class="active">
            Editar
        </li>
    </ol>
@stop

@section('content')
    
    <div class="box box-danger">
        <div class="box-header with-border"></div>
        <form action="{{route('papeis.update',$registro->id)}}" method="post">
            <div class="box-body">
                {{csrf_field()}}
                {{method_field('PUT')}}
                <div class="form-group col-md-3">
                    <label for="nome">Nome do Papel</label>
                    <input type="text" name="nome" id="nome" class="form-control" value="{{isset($registro->nome) ? $registro->nome : ''}}">
                </div>
                <div class="form-group col-md-9">
                    <label for="descricao">Descrição</label>
                    <input type="text" name="descricao" id="descricao" class="form-control" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
                </div>              
            <div>
            </div>
            <div class="box-footer">
                <button class="btn btn-success">Atualizar</button>
            </div>
        <form>
    </div>
     
@stop

