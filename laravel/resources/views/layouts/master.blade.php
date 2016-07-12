<!DOCTYPE html>
<html lang="pt">
<head>
    <title>@yield('title')</title>

    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>

</head>
<body>
<div class="menu">
    @section('sidebar')
        @include('layouts.sidebar')
    @show
</div>
<div class="container">
    <header class="clearfix">
        <h1>O teu Perfil</h1>
        <nav>
            <a href="profile" class="icon-profile" data-info="user profile">Ver Perfil</a>
            <a href="login" class="icon-logout" data-info="logout">Logout</a>
        </nav>
    </header>
    <div class="main">
        @yield('main')
    </div>
</div>
</body>
</html>
