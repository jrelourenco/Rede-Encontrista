@extends('layouts.master')
@section('title')
    Rede Encontristaas: Admin -> Listar Grupos
@stop
@section('main')

    <div class="main">
        <section ng-app="app" ng-controller="ctrl">

            <div class="form-group col-lg-4 pull-right">
                <div class="input-group">
                    <div class="input-group-addon"><i class="fa fa-search"></i></div>
                    <input type="text" class="form-control" placeholder="Search" ng-model="search">
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>Localização</th>
                    <th>Incio do grupo</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="group in groups  | filter:paginate  track by $index">
                    <td><% group['id'] %></td>
                    <td><%group.designacao%></td>
                    <td><% group.localizacao %></td>
                    <td><%group.data_criacao %></td>
                    <td ng-if="group.active"><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                    <td ng-if="!group.active"><i class="fa fa-times text-danger" aria-hidden="true"></i></td>
                </tr>

                </tbody>
            </table>

            <pagination class="pull-right" total-items="totalItems" page="currentPage" max-size="5"
                        items-per-page="numPerPage"></pagination>

        </section>
    </div>
@endsection

@section('javascript-asset')
    <script>
        var linkToGetGroups = "{{URL::route('admin.group.json.list')}}";
        var linkToGetGroupInfo = "{{URL::route('admin.group.json.info',':id')}}";
    </script>
    <script src="{{asset('js/angular/app.js')}}"></script>
    <script src="{{asset('js/angular/groups/serv.js')}}"></script>
    <script src="{{asset('js/angular/groups/ctrl.js')}}"></script>


@endsection