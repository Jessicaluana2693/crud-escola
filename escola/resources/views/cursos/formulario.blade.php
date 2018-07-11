@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Insira abaixo os dados do curso
                    <a class="pull-right" href="{{url('cursos')}}">Voltar</a>
                </div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                    @endif

                    @if(Request::is('*/editar'))
                        {!! Form::model($curso, ['method'=>'PATCH', 'url'=>'cursos/'.$curso->id_curso]) !!}
                    @else
                        {!! Form::open(['url'=>'cursos/salvar']) !!}
                    @endif

                    

                        {!! Form::label('nome', 'Nome') !!}
                        {!! Form::input('text', 'nome', null, ['class'=>'form-control', 'autofocus', 'placeholder'=>'Nome']) !!}

                        

                        {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection