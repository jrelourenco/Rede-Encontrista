@extends('layouts.master')
@section('title')
    Rede Encontristaas: Admin -> Listar Grupos
@stop
@section('main')
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Localizacao</th>
            <th>Incio do grupo</th>
            <th>Ativo</th>
        </tr>
        </thead>
        <tbody>
        @foreach( $grupos as $f)
            <tr>
                <td>{{$f->id}}</td>
                <td>{{$f->designacao}}</td>
                <td>{{$f->localizacao}}</td>
                <td>{{ date('F d, Y', strtotime($f->data_criacao)) }}</td>
                <td>{{$f->isAtivo()}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@stop