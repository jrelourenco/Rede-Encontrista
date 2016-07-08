@extends('layout.master')
@section('title')
    Rede Encontristaas: Perfil
@stop
@section('main')
    <div class="main">
        <section>
            <form action="admin-courses.php" method="post">
                <h2>Procurar cursos</h2>

                <!-- Search Field -->
                <div class="input-group input-group-lg">
                    <span class="input-group-addon">Procurar</span>
                    <input type="text" class="form-control"
                           placeholder="ie Id do curso, Nome do curso, Data do curso DD/MM/YYYY, etc...">
                </div>
                <!-- Courses List -->
                <div class="table-results">
                    <table class="table table-stripped">
                        <tbody>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Data</th>
                            <th>Estado</th>
                            <th>Local</th>
                            <th>Opções</th>
                        </tr>
                        <tr>
                            <td>14857</td>
                            <td>Reencontro Cristo Nosso Irmão</td>
                            <td>10 de Maio de 2016</td>
                            <td>Encerrado</td>
                            <td>CSh Oeiras</td>
                            <td><a href="admin-courses.php?edit=14857">Alterar</a> | <a
                                        href="admin-courses.php?remove=14857">Remover</a></td>
                        </tr>
                        <tr>
                            <td>94839</td>
                            <td>Curso de Oração</td>
                            <td>12 de Abril de 2016</td>
                            <td>Em inscrições</td>
                            <td>CSh Braga</td>
                            <td><a href="admin-courses.php?edit=94839">Alterar</a> | <a
                                        href="admin-courses.php?remove=94839">Remover</a></td>
                        </tr>
                        <tr>
                            <td>38743</td>
                            <td>Curso Pedagogia Dinâmica</td>
                            <td>10 Junho de 2016</td>
                            <td>Novo</td>
                            <td>Paróquia de Algés</td>
                            <td><a href="admin-courses.php?edit=38743">Alterar</a> | <a
                                        href="admin-courses.php?remove=38743">Remover</a></td>
                        </tr>
                        </tbody>
                    </table>

                </div>
            </form>
            <form action="admin-courses-edit.php" method="post">
                <button type="submit" class="float" name="create-button" value="create">Criar Curso</button>
            </form>

        </section>
    </div>

@stop
