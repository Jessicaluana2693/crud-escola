@extends('layouts.app')

@section('content')
<script type="text/javascript" src="{{ asset('js/script.js') }}"></script>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Insira abaixo os dados do aluno
                    <a class="pull-right" href="{{url('alunos')}}">Voltar</a>
                </div>

                <div class="panel-body">
                    @if(Session::has('mensagem_sucesso'))
                        <div class="alert alert-success">{{Session::get('mensagem_sucesso')}}</div>
                    @endif

                    @if(Request::is('*/editar'))
                        {!! Form::model($aluno, ['method'=>'PATCH', 'url'=>'alunos/'.$aluno->id]) !!}
                    @else
                        {!! Form::open(['url'=>'alunos/salvar']) !!}
                    @endif

                    

                        {!! Form::label('nome', 'Nome') !!}
                        {!! Form::input('text', 'nome', null, ['class'=>'form-control', 'autofocus', 'placeholder'=>'Nome']) !!}

                        {!! Form::label('data_nascimento', 'Data de Nascimento') !!}
                        {!! Form::input('data', 'data_nascimento', null, ['class'=>'form-control', '', 'placeholder'=>'yyyy-mm-dd']) !!}

                        {!! Form::label('logradouro', 'Logradouro') !!}
                        {!! Form::input('mediumText', 'logradouro', '', ['class'=>'form-control', '', 'placeholder'=>'Endereço']) !!}

                        {!! Form::label('numero', 'Numero') !!}
                        {!! Form::input('integer', 'numero', null, ['class'=>'form-control', '', 'placeholder'=>'Numero']) !!}

                        {!! Form::label('bairro', 'Bairro') !!}
                        {!! Form::input('text', 'bairro', null, ['class'=>'form-control', '', 'placeholder'=>'Bairro']) !!}

                        {!! Form::label('cidade', 'Cidade') !!}
                        {!! Form::input('text', 'cidade', '', ['class'=>'form-control', '', 'placeholder'=>'Cidade Atual']) !!}

                        {!! Form::label('estado', 'Estado') !!}
                        {!! Form::input('text', 'estado', null, ['class'=>'form-control', '', 'placeholder'=>'AM']) !!}

                        {!! Form::label('cep', 'CEP') !!}
                        {!! Form::input('bigInteger', 'cep', null, ['class'=>'form-control', '', 'placeholder'=>'1111-001', 'onBlur' => 'pesquisacep(this.value)']) !!}

                        {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
