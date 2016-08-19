angular.module('app')
    .filter('label', ['$filter', function ($filter) {
        return function (meeting) {
            return meeting.type.name + " - " + $filter('date')(meeting.start_date,"shortDate") + " @ " + meeting.place;
        }

    }]);