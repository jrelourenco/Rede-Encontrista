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

<div class="container">

    <header class="clearfix">
        <h1>O teu Perfil</h1>
        <nav>
            <a href="profile" class="icon-profile" data-info="user profile">Ver Perfil</a>
            <a href="logout" class="icon-logout" data-info="logout">Logout</a>
        </nav>
    </header>
    @endif
    <div class="main">
        @yield('main')
    </div>
</div>
</body>
</html>
