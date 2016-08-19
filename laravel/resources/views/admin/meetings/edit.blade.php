@extends('layouts.master')


@section('title')
    @if($in_create) Rede Encontristas: Criar encontro @else Rede Encontristas: Editar encontro @endif
@endsection
@section('page-title')
    @if($in_create) Criar um encontro @else Editar encontro @endif
@endsection
@section('main')

    <div class="main" ng-app="app" ng-controller="ctrl">
        <section>
            <form class="form-horizontal">
                <input type="hidden" value="{{$course->id}}">
                <div class="form-group">
                    <label class="col-md-3 control-label" for="curso">Tipo de encontro</label>
                    <div class="col-md-9">
                        <select name="tipo_encontro" class="form-control" ng-change="change_tipo_encontro()"
                                ng-model="tipo_encontro">
                            @foreach($encontro_types as $encontro_type)
                                <option>{{$encontro_type->tipo_encontros}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="curso">Nome do encontro</label>
                    <%encontro_name%>
                    <div class="col-md-9">
                        <select class="form-control" ng-model="encontro_name"
                                ng-options="encontro.nome_encontro for encontro in encontros"></select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="data_inicio">Data de inicio</label>
                    <div class="col-md-9">
                        <div class='input-group' id='datetimepicker6'>
                            <input type='text' name="data_inicio" class="form-control"/>
                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="date_final">Data de fim</label>
                    <div class="col-md-9">
                        <div class='input-group date'>
                            <input name="date_final" type='text' class="form-control col-md9"/>
                            <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                        </div>
                    </div>
                </div>


                <div class="form-group  ">
                    <div class="col-md-12">
                        <div class="pull-right">
                            <div class="btn-group">
                                @Perm('course.admin.edit')
                                <button class="btn btn-info" type="submit">Gravar</button>
                                @endPerm

                            </div>
                        </div>
                    </div>
                </div>


                <!-- Login Button -->

            </form>
            <div style="height: 50px;"></div>

            <div class="table-results">
                <table class="table table-stripped">
                    <tbody>
                    <tr>
                        <th>SP</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                    </tr>
                    <tr>
                        <td>Buraca</td>
                        <td>João António</td>
                        <td>joao.antonio@shalom.pt</td>
                        <td>96 123 45 67</td>
                    </tr>
                    <tr>
                        <td>Abóboda</td>
                        <td>Rui Filipe</td>
                        <td>rui.filipe@shalom.pt</td>
                        <td>96 123 45 67</td>
                    </tr>
                    <tr>
                        <td>Venda-Nova</td>
                        <td>Andreia Macário</td>
                        <td>andreia.macario@shalom.pt</td>
                        <td>96 123 45 67</td>
                    </tr>
                    <tr>
                        <td>Lavradio</td>
                        <td>Luis Duarte</td>
                        <td>luis.duarte@shalom.pt</td>
                        <td>96 123 45 67</td>
                    </tr>
                    <tr>
                        <td>Castelo-Branco</td>
                        <td>Ana Filomena</td>
                        <td>ana.filomena@shalom.pt</td>
                        <td>96 123 45 67</td>
                    </tr>
                    <tr>
                        <td>Entroncamento</td>
                        <td>Mariana Silva</td>
                        <td>mariana.silva@shalom.pt</td>
                        <td>96 123 45 67</td>
                    </tr>
                    </tbody>
                </table>
            </div>


        </section>
    </div>
@endsection()

@section('javascript-asset')
    <script>
        angular.module('app', [], function ($interpolateProvider) {
            $interpolateProvider.startSymbol('<%');
            $interpolateProvider.endSymbol('%>');
        });
    </script>
    <script>
        angular.module('app')
                .controller('ctrl', ['$scope', '$http', function ($scope, $http) {

                    $urlInfo = "{{URL::route('admin.course.info',':encontro')}}";

                    $scope.change_tipo_encontro = function () {
                        $http
                                .get($urlInfo.replace(':encontro', $scope.tipo_encontro))
                                .then(function (response) {
                                    $scope.encontros = response.data.course_types;
                                });
                    };

                    $scope.tipo_encontro = '{{$course->tipo->tipo_encontros}}';
                    $scope.change_tipo_encontro()
                    $scope.encontro_name = '{{$course->tipo->nome_encontro}}';



                }]);


    </script>
@endsection