@extends('layouts.auth_layout')

@section('nav')
    <li class="">
        <a class="btn logNav " href="{{ route('login') }}">{{ __('Login') }}</a>
    </li>
@endsection

@section('content')
    <div class="container cont-log">
        <div class="row justify-content-center box-log">
            <div class="col-md-10">
                <div class="row" style="justify-content: center; text-align: center">
                    <div class="text-header">{{ __('Registo confirmado com sucesso!') }}</div>
                    <br>
                    <br>

                    <div class="card-body">
                        <h4 class="white">Bem Vindo ao SCMed!<br>Com isto a sua conta está oficialmente confirmada<br>
                        Já pode realizar login quando quiser utilizando o seu mail e password.
                        </h4>
                    </div>

                    <a class="btn submitInput" href="/">
                        Voltar a Página Principal
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
