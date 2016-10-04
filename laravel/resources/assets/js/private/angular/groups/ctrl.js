angular.module('app')
    .controller('ctrl', ['$scope', 'rest', '$filter','$uibModal', function ($scope, rest, $filter,modal) {

        rest.list().then(function (response) {
            $scope.$watch('search', function (value) {
                $scope.objs = $filter('filter')( response.data, value);
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
        $scope.model = function (objs) {
            alert(objs);
        };

    }]);

