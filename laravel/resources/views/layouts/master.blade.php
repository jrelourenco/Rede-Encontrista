<!DOCTYPE html>
<html lang="pt">
<head>
    <title>@yield('title')</title>

    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <!-- Referencing Bootstrap CSS that is hosted locally -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">

</head>
<body>

@section('sidebar')
    @include('layouts.sidebar')
@show

<div class="col-lg-10">


    <header >
            <nav>
            <ul class="navbar-right">
                @if (Auth::check())
                    @include('layouts.button', ['url' => 'profile','icon'=>'log-out'])
                    @include('layouts.button', ['url' => 'logout','icon'=>'lock'])
                @else
                    @include('layouts.button', ['url' => 'login','icon'=>'log-in'])
                @endif

            </ul>
        </nav>
    </header>


    <main class="main">
        @yield('main')
    </main>
</div>
</body>
</html>
