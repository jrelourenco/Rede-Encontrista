@extends('layouts.master')

@section('title')
    Rede Encontristaas: Gerir cursos
@endsection
@section('page-title')
    Gerir cursos
@endsection
@section('main')
    <div class="main">
        <section ng-app="app" ng-controller="ctrl">
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
                        <tr ng-repeat="meeting in meetings">
                            <td><% meeting.id %></td>
                            <td><% meeting.type.name%></td>
                            <td><% meeting.start_date | date %></td>
                            <td><% meeting | state%></td>
                            <td><% meeting.place%></td>
                            <td>
                                <a href="<% urlMeetingEdit.replace(':id',meeting.id) %>">Alterar</a> |
                                <a href="admin-courses.php?remove=14857">Remover</a>
                            </td>

                        </tr>
                        </tbody>
                    </table>

                </div>
            </form>
            <a href="{{URL::route('admin.meetings.new') }}" class="btn btn-info">Criar</a>
        </section>
    </div>

@endsection()
@section('javascript-asset')

    <script>
        var admin = true;
        var urlMeetingList = "{{URL::route('meetings.json.list')}}";
        var urlMeetingEdit = "{{URL::route('admin.meetings.edit',':id')}}";
    </script>
    <script src="{{asset('js/angular/app.js')}}"></script>
    <script src="{{asset('js/angular/meetings/serv.js')}}"></script>
    <script src="{{asset('js/angular/meetings/filterState.js')}}"></script>
    <script src="{{asset('js/angular/meetings/ctrl.js')}}"></script>



@endsection
