angular.module('app')
    .factory('rest', ['$http',
        function ($http) {
            return {
                list: function () {
                    return $http.get(urlList)
                },
                show: function (id) {
                    return $http.get(urlShow.replace(':id', id))
                },
                store: function (obj) {
                    return $http.post(utlStore, obj);
                },
                update: function (id, obj) {
                    return $http.put(urlUpdate.replace(':id', id), obj);
                },
                destroy: function (id) {
                    return $http.delete(urlDestroy.replace(':id', id), obj);
                },
            };
        }
    ]);
