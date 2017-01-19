cookApp.factory('userModel', ['$http', '$cookies', function($http, $cookies) {
    return {
        login : function(loginForm) {
            return $http({
                method: 'POST',
                url: '/login',
                headers: { 'Content-Type' : 'application/json' },
                data: {
                    email : loginForm.email,
                    password : loginForm.password
                }
            });
        },
        getAuthStatus : function() {
            var status = $cookies.get('auth');
            if (status) {
                return true;
            } else {
                return false;
            }
        },
        getUserObject : function() {
            var userObject = $cookies.get('auth');
            return userObject;
        },
        doUserLogout : function() {
            $cookies.remove('auth');
        }
    };
}]);

