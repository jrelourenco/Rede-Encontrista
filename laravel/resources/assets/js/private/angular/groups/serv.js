angular.module('app')
    .factory('serv', ['$http', function ($http) {
       toReturn = {};

        toReturn.groups = (
            function () {
                return $http.get(linkToGetGroups)
            });
        toReturn.group = (
            function ($id) {
                return $http
                    .get(linkToGetGroupInfo.replace(':id', $id))
                    .success(function (response) {
                        return response.group;
                    });
            });
        return toReturn;


    }]);
