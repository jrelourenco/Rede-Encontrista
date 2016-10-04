angular.module('app')
    .controller('ctrl', ['$scope', 'rest', '$filter', '$uibModal',
        function ($scope, rest, $filter, modal) {


            $scope.alerts = {
                list: [],
                push: function (obj) {
                    this.list.push(obj)
                },
                pop: function (id) {
                    this.list.splice(id, 1)
                },
            };
            rest.list().then(function (response) {
                $scope.$watchCollection('search', function (value) {
                    $scope.objs = $filter('filter')(response.data, value);
                    $scope.currentPage = 1;
                    $scope.numPerPage = 10;
                    $scope.totalItems = $scope.objs.length;
                    $scope.paginate = function (value) {
                        var begin, end, index;
                        begin = ($scope.currentPage - 1) * $scope.numPerPage;
                        end = begin + $scope.numPerPage;
                        index = $scope.objs.indexOf(value);
                        return (begin <= index && index < end);
                    };
                });

            });

            $scope.openModel = function (id) {
                if (angular.isDefined(id))
                    rest.show(id).then(function (response) {
                        $scope.obj = response.data;
                        $scope.model($scope.obj);
                    })

                else
                    $scope.model();



            };


            $scope.model = function (obj) {

                modal
                    .open({
                        animation: true,
                        ariaLabelledBy: 'modal-title',
                        ariaDescribedBy: 'modal-body',
                        templateUrl: urlModal,
                        controller: 'modalCtrl',
                        size: 'lg',
                        resolve: {
                            obj: function () {
                                return obj;
                            },
                        }
                    });
            };

        }]);


angular.module('app')


    .filter('icon', ['$sce', function ($sce) {
        return function (value) {
            return $sce.trustAsHtml(
                value ?
                    '<i class="glyphicon glyphicon-ok text-success"></i> ' :
                    '<i class="glyphicon glyphicon-remove text-danger"></i>'
            );
        }

    }]);

