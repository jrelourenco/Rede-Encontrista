@extends('layouts.master')
@section('title')
    Rede Encontristaas: Perfil
@stop
@section('main')
    <div class="login-form" >
        <div class="heading col-lg-4 col-lg-offset-4 text-center">
            <h2>Rede Encontristas</h2>
            <h3>Bem vindo! Insere as credenciais para entrares</h3>
            <form method="POST" action="{{ url('/login') }}" role="form">


                <!-- Email Field -->
                <div class=" input-group ">
                    <span class="input-group-addon"> <i class="glyphicon-user glyphicon"></i></span>
                    <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- Password Field -->
                <div class="input-group ">
                    <span class="input-group-addon"> <i class="glyphicon-lock glyphicon"></i></span>
                    <input type="password" class="form-control" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>

                <!-- Login Button -->

                    <button type="submit" name="submit" class="btn btn-block">Login</button>


                {!! csrf_field() !!}
            </form>
            <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
        </div>
    </div>
@stop