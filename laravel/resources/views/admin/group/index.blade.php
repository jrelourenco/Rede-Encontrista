@extends('layouts.master')
@section('title')
    Rede Encontristaas: Admin -> Listar Grupos
@endsection
@section('main')

    <div class="main">
        <section ng-app="app" ng-controller="ctrl">

            <div uib-alert ng-repeat="alert in alerts.list" ng-class="'alert-' + (alert.type || 'warning') +' fade-out'"
                 close="alerts.pop($index)" dismiss-on-timeout="5000"><%alert.msg%>
            </div>

            <div class="form-inline pull-right">

                <div class="form-group  ">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="glyphicon glyphicon-search"></i></div>
                        <input type="text" class="form-control" placeholder="Search" ng-model="search.$">
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
                <tr ng-repeat="obj in objs  | filter:paginate  track by $index" ng-click="open(obj.id)">

                    <td><%obj.designation%></td>
                    <td><% obj.localization %></td>
                    <td><%obj.creation_date | date %></td>
                    <td ng-if="obj.active"><i class="glyphicon glyphicon-ok text-success"></i></td>
                    <td ng-if="!obj.active"><i class="glyphicon glyphicon-remove text-danger"></i></td>
                </tr>

                </tbody>
            </table>


            <ul uib-pagination class="pull-right" total-items="totalItems" ng-model="currentPage" max-size="5"></ul>


            <div class="btn"></div>
        </section>
    </div>
@endsection

@section('javascript-asset')
    @include('layouts.rest_urls',[$model="group"])
    <script src="{{asset('js/angular/app.js')}}"></script>
    <script src="{{asset('js/angular/groups/values.js')}}"></script>
    <script src="{{asset('js/angular/serv.js')}}"></script>
    <script src="{{asset('js/angular/modalCtrl.js')}}"></script>
    <script src="{{asset('js/angular/bootstrap-switch.js')}}"></script>
    <script src="{{asset('js/angular/groups/ctrl.js')}}"></script>
@endsection