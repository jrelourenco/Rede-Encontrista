<!DOCTYPE html>
<html lang="pt">
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

</head>
<body>

@section('sidebar')
    @include('layouts.sidebar')
@show

<div id="content" class="container">


    <div class="page-header">


        <h1>
            @yield('page-title')
            <span class="pull-right">
            @if(Auth::check())
                    @include('layouts.button', ['url' => 'profile','icon'=>'user'])
                    @include('layouts.button', ['url' => 'logout','icon'=>'log-out'])
                @else
                    @include('layouts.button', ['url' => 'login','icon'=>'log-in'])
                @endif

        </span>
        </h1>
        <div class="clearfix"></div>
    </div>
    <div class="page-body"></div>

    <main class="main">
        @yield('main')
    </main>

</div>
<script src="{{ asset('js/vendor.js') }}"></script>

@yield('javascript-asset')
</body>
</html>
