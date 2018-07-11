@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-0">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Alunos Matriculados
                    <a class="pull-right" href="{{url('alunos/novo')}}">Adicionar novo aluno</a>
                </div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th class="text-center">Logradouro</th>
                        <th>Número</th>
                        <th>Bairro</th>
                        <th>Cidade</th>
                        <th>Estado</th>
                        <th>CEP</th>
                        <th>Botões</th>
                        <tbody>
                            @foreach($alunos as $aluno)
                            <tr>
                                <td>{{$aluno->nome}}</td>
                                <td>{{$aluno->data_nascimento}}</td>
                                <td>{{$aluno->logradouro}}</td>
                                <td class="text-center">{{$aluno->numero}}</td>
                                <td>{{$aluno->bairro}}</td>
                                <td>{{$aluno->cidade}}</td>
                                <td>{{$aluno->estado}}</td>
                                <td>{{$aluno->cep}}</td>
                                <td class="btn-group" role="group">
                                    <a href="alunos/{{$aluno->id}}/editar" class="btn btn-primary btn-sm">Editar</a>
                                    {!! Form::open(['method'=>'DELETE', 'url'=>'/alunos/'.$aluno->id,'style'=>'display: flex;']) !!}
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