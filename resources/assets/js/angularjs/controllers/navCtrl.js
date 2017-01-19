cookApp.directive('navigation', function($scope, userModel) {
    return {
        templateUrl : function() {
            if(userModel.getAuthStatus()) {
                $scope.user = userModel.getUserObject();
                return 'templates/partial/navLogin.html';
            }
            return 'templates/partial/navLogin.html';
        }
    }
});
