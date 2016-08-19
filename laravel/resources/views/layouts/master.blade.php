<!DOCTYPE html>
<html lang="pt">
<head>
    <title>@yield('title')</title>

    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- Referencing Bootstrap CSS that is hosted locally -->
    <link rel="stylesheet" href="{{ URL::asset('css/all.css') }}">

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
                    @include('layouts.button', ['url' => 'logout','icon'=>'sign-out'])
                @else
                    @include('layouts.button', ['url' => 'login','icon'=>'sign-in'])
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
{{--<script src="{{ asset('js/all.js') }}"></script>--}}

<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.8/angular.min.js"></script>
<script src="{{ asset('js/angular-locale_pt-pt.js') }}"></script>
<script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.10.0.js"></script>
@yield('javascript-asset')
</body>
</html>
