@extends('layouts.master')
@section('title')
    Rede Encontristaas: Login
@endsection
@section('page-title')
    Login na Rede Encotnrista
@endsection
@section('main')

    <div class="main">
        <section>
            <form class="login" role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}


                <div class="col-md-6 col-md-offset-3">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                            <input type="text" class="form-control" placeholder="Email" name="email"
                                   value="{{ old('email') }}">
                        </div>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                     <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        @endif
                    </div>
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-md-6 col-md-offset-5">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="remember"> Remember Me
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>

                        <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your
                            Password?</a>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection
