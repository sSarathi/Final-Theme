var app = angular.module('FooterbarApp', []);

app. controller('footerBarCntrl', function($scope) {
    
    $scope.myVar = false;
    $scope.changefooter = function () {
        $scope.myVar = !$scope.myVar;
    };
});