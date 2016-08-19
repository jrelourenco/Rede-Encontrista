
angular.module('app')
    .factory('serv', ['$http', function ($http) {
        toReturn = {};

        toReturn.meetings = (
            function () {
                return $http.get(urlMeetingList)
            });
        toReturn.meeting = (
            function ($id) {
                return $http.get(urlMeetingInfo.replace(':id', $id));
            });

        toReturn.subscribe = (
            function ($id) {
                return $http.get(urlMeetingSubscribe.replace(':id', $id));
            });

        toReturn.unsubscribe = (
            function ($id) {
                return $http.get(urlMeetingUnsubscribe.replace(':id', $id));
            });

        return toReturn;


    }]);