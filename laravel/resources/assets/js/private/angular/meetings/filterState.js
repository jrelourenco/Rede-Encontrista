angular.module('app')
    .filter('state', function () {
        return function (meeting) {
            if (new Date().getTime() - meeting.start_date > 0)
                return "previsto";
            else if (new Date().getTime() - meeting.end_date > 0)
                return 'a decorrer';
            else
                return 'terminado';
        }

    });