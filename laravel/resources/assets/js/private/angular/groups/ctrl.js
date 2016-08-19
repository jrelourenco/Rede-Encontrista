angular.module('app')
    .controller('ctrl', ['$scope', 'serv', '$filter', function ($scope, service, $filter) {
        service.groups().then(function (response) {
            $scope.groupsService = response.data.groups;
            $scope.$watch('search', function (value) {
                $scope.groups = $filter('filter')($scope.groupsService, value);
                $scope.currentPage = 1;
                $scope.numPerPage = 10;
                $scope.totalItems = $scope.groups.length;
                $scope.paginate = function (value) {
                    var begin, end, index;
                    begin = ($scope.currentPage - 1) * $scope.numPerPage;
                    end = begin + $scope.numPerPage;
                    index = $scope.groups.indexOf(value);
                    return (begin <= index && index < end);
                };
            });

        });
    }]);

