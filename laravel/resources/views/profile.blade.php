@extends('layout.master')
@section('title')
    Rede Encontristaas: Perfil
@stop
@section('main')
    <section>
        <form action="index.php" method="post">
            <h2>Dados de Login</h2>

                    <!-- Email Field -->
            <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" value="">
            </div>

            <!-- Password Field -->
            <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                <input type="password" class="form-control" value="*******">
            </div>

            <h2>Dados de Pessoais</h2>

            <!-- Nome Completo -->
            <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" value="João Nascimento do Carmo">
            </div>

            <!-- Alcunha -->
            <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" value="Jonas">
            </div>

            <!-- Birthday Field -->
            <div class="input-group input-group-lg">
                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" value="25/12/1980">
            </div>

            <!-- Login Button -->
            <button type="submit" class="float">Editar</button>
        </form>
    </section>
@stop
