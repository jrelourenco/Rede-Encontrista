@extends('layouts.master')


@section('page-title')
    Admin -> Gerir Encontros
@endsection

@section('main')

    <div class="main">
        <section ng-app="app" ng-controller="ctrl">

            <div uib-alert ng-repeat="alert in alerts.list" ng-class="'alert-' + (alert.type || 'warning') +' fade-out'"
                 close="alerts.pop($index)" dismiss-on-timeout="5000"><%alert.msg%>
            </div>

            <div class="form-inline pull-right">
                <div class="form-group  ">
                    <laber>Terminados:</laber>
                    <input bootstrap-switch ng-init="search.state ='!terminado'" type="checkbox"
                           ng-model="state"
                           ng-change="search.state = state ?'':'!terminado'"/>
                </div>
                <div class=" form-group ">
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
                    <th>Data</th>
                    <th> Estado</th>
                    <th>Local</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <tr ng-repeat="obj in objs  | filter:paginate  track by $index" ng-click="open(obj.id)">
                    <td><% obj.type.name%></td>
                    <td><% obj.start_date | date %></td>
                    <td><% obj.state%></td>
                    <td><% obj.place%></td>

                </tr>
                </tbody>


                </tbody>
            </table>


            <ul uib-pagination class="pull-right" total-items="totalItems" ng-model="currentPage"
                max-size="5"></ul>


            <div class="btn"></div>
        </section>
    </div>
@endsection

@section('javascript-asset')
    @include('layouts.rest_urls',[$model="meeting"])
    <script src="{{asset('js/angular/app.js')}}"></script>
    <script src="{{asset('js/angular/meetings/values.js')}}"></script>
    <script src="{{asset('js/angular/modalCtrl.js')}}"></script>
    <script src="{{asset('js/angular/bootstrap-switch.js')}}"></script>
    <script src="{{asset('js/angular/serv.js')}}"></script>
    <script src="{{asset('js/angular/meetings/ctrl.js')}}"></script>


@endsection