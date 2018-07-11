@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
           
            <div class="flex-center position-ref full-height">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @if (Auth::check())
                            <a href="{{ url('/home') }}">Home</a>
                        @else
                            <a href="{{ url('/login') }}">Login</a>
                            <a href="{{ url('/register') }}">Registrar</a>
                        @endif
                    </div>
                @endif

                <div class="content">
                    <div class="title m-b-md">
                        Bem-vindo ao Projeto Escola
                    </div>

                    <div class="links">
                        <a href="https://github.com/laravel/laravel">GitHub</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
