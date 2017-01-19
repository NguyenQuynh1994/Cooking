cookApp.controller('loginCtrl', ['$scope', '$location', 'userModel', '$cookies', function($scope, $location, userModel, $cookies) {
    $scope.doLogin = function(loginForm) {
        var data = {
            email : $scope.login.username,
            password: $scope.login.password
        };
        console.log(data);

        userModel.login(data)
            .then (function successCallback(response) {
                console.log(response);
                $location.path('/');
                $cookies.put('auth', response);

            }, function errorCallback(data) {
                console.log(data);
                alert(data);
            });
    };
}]);

//# sourceMappingURL=loginCtrl.js.map
