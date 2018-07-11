@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Painel de Cursos
                    <a class="pull-right" href="{{url('cursos/novo')}}">Adicionar novo curso</a>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <th>Nome</th>
                        <th>Botões</th>
                        <tbody>
                            @foreach($cursos as $curso)
                            <tr>
                                <td>{{$curso->nome}}</td>
                                
                                <td class="btn-group" role="group">
                                    <a href="cursos/{{$curso->id_curso}}/editar" class="btn btn-primary btn-sm">Editar</a>
                                    {!! Form::open(['method'=>'DELETE', 'url'=>'/cursos/'.$curso->id_curso,'style'=>'display: flex;']) !!}
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