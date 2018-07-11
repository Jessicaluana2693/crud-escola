@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Professores Ativos
                    <a class="pull-right" href="{{url('professores/novo')}}">Adicionar novo professor</a>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Botões</th>
                        <tbody>
                            @foreach($professores as $professor)
                            <tr>
                                <td>{{$professor->nome}}</td>
                                <td>{{$professor->data_nascimento}}</td>
                               
                                <td class="btn-group" role="group">
                                    <a href="professores/{{$professor->id_professor}}/editar" class="btn btn-primary btn-sm">Editar</a>
                                    {!! Form::open(['method'=>'DELETE', 'url'=>'/professores/'.$professor->id_professor,'style'=>'display: flex;']) !!}
                                    <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection