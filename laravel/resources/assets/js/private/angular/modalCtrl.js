angular.module('app')
    .controller('modalCtrl', ['$scope', 'rest', '$uibModalInstance', 'obj',
        function ($scope, rest, modal, obj) {
            $scope.obj = obj;
            $scope.modalControl = {
                edit: !angular.isDefined(obj),
                defined: angular.isDefined(obj),
        }


        }]);