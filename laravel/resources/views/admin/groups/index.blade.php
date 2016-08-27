@extends('layouts.master')
@section('title')
    Rede Encontristaas: Admin -> Listar Grupos
@stop
@section('main')

    <div class="main">
        <section ng-app="app" ng-controller="ctrl">



                <div uib-alert ng-repeat="alert in alerts" ng-class="'alert-' + (alert.type || 'warning') +' fade-out'"
                     close="alerts.splice($index, 1)" dismiss-on-timeout="5000"><%alert.msg%>
                </div>

            <div class="form-inline pull-right" ng-style="myStyle">

                <div class="form-group  ">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="glyphicon glyphicon-search"></i></div>
                        <input type="text" class="form-control" placeholder="Search" ng-model="search">
                    </div>

                </div>
                <div class="form-group ">
                    <div class="btn btn-primary" type="button" ng-click="create()">Create</div>
                </div>
            </div>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Localização</th>
                    <th>Incio do grupo</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="group in groups  | filter:paginate  track by $index" ng-click="open(group.id)">

                    <td><%group.designation%></td>
                    <td><% group.localization %></td>
                    <td><%group.creation_date | date %></td>
                    <td ng-if="group.active"><i class="glyphicon glyphicon-ok text-success" aria-hidden="true"></i></td>
                    <td ng-if="!group.active"><i class="glyphicon glyphicon-remove text-danger" aria-hidden="true"></i>
                    </td>


                </tr>

                </tbody>
            </table>


            <ul uib-pagination
                class="pull-right"
                total-items="totalItems"
                ng-model="currentPage"
                max-size="5"

            ></ul>


            <div class="btn"></div>
        </section>
    </div>
@endsection

@section('javascript-asset')


    <script>
        var linkToGetGroups = "{{URL::route('admin.json.group.index')}}";
        var linkToGetGroupInfo = "{{URL::route('admin.json.group.show',':id')}}";
        var linkToStoreGroups = "{{URL::route('admin.json.group.store')}}";
        var linkToUpdateGroups = "{{URL::route('admin.json.group.update',':id')}}";
        var linkToDeleteGroups = "{{URL::route('admin.json.group.destroy',':id')}}";
        var linkToModalGroups = "{{URL::route('admin.group.modal')}}";
    </script>
    <script src="{{asset('js/angular/app.js')}}"></script>
    <script src="{{asset('js/angular/bootstrap-switch.js')}}"></script>
    <script src="{{asset('js/angular/input.js')}}"></script>
    <script src="{{asset('js/angular/filterTimestamp.js')}}"></script>
    <script src="{{asset('js/angular/groups/serv.js')}}"></script>
    <script src="{{asset('js/angular/groups/ctrl.js')}}"></script>


@endsection