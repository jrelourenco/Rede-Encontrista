angular.module('app')
    .controller('ctrl', ['$scope', 'serv', '$sce', function ($scope, service, $sce) {

        service.meetings().then(function (response) {
            $scope.meetings = response.data.meetings;

        });

        if (admin) {
            $scope.urlMeetingEdit = urlMeetingEdit;
        }

        else {

            $scope.selected = 'hide';
            $scope.change = function () {

                service.meeting($scope.meetingsSelected.id).then(function (response) {
                    $scope.meeting = response.data.meeting;
                    $scope.meeting_type = response.data.meeting_type;
                    $scope.status = response.data.status;

                    $scope.meeting_type.description = $sce.trustAsHtml(response.data.meeting_type.description);
                    $scope.meeting.description = $sce.trustAsHtml($scope.meeting.description);

                    $scope.selected = '';
                    $scope.subscribeStateClass = $scope.status.subscribed ? 'disabled' : '';
                    $scope.unsubscribeStateClass = $scope.status.subscribed ? '' : 'disabled';
                });
            };

            $scope.subscribe = function () {
                service.subscribe($scope.meetingsSelected.id).then(function () {
                    $scope.subscribeStateClass = 'disabled';
                    $scope.unsubscribeStateClass = '';
                    $scope.change()
                });
            };

            $scope.unsubscribe = function () {
                service.unsubscribe($scope.meetingsSelected.id).then(function () {
                    $scope.subscribeStateClass = '';
                    $scope.unsubscribeStateClass = 'disabled';
                    $scope.change()
                });
            };
        }


    }]);
