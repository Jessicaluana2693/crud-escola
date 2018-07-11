@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Insira abaixo os dados do Professor
                    <a class="pull-right" href="{{url('professores')}}">Voltar</a>
                </div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                    @endif

                    @if(Request::is('*/editar'))
                        {!! Form::model($professor, ['method'=>'PATCH', 'url'=>'professores/'.$professor->id_professor]) !!}
                    @else
                        {!! Form::open(['url'=>'professores/salvar']) !!}
                    @endif


                        {!! Form::label('nome', 'Nome') !!}
                        {!! Form::input('text', 'nome', null, ['class'=>'form-control', 'autofocus', 'placeholder'=>'Nome']) !!}

                        {!! Form::label('data_nascimento', 'Data de Nascimento') !!}
                        {!! Form::input('data', 'data_nascimento', null, ['class'=>'form-control', '', 'placeholder'=>'yyyy-mm-dd']) !!}


                        {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection