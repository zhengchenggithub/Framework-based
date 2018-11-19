/**
 * Created by Administrator on 2017/10/25.
 */
angular.module('loginModule', [])
    .controller('loginCtrl', function ($scope, $location) {
        console.log('login');

        $scope.login = function () {
            var username = $scope.username;
            var password = $scope.password;

            $.ajax({
                url: "http://localhost:8088/phpText/angularjs/Goods%20management/Service/login.php",
                type: "POST",
                data: {
                    username:username,
                    password:password
                },
                success:function (data) {
                    console.log(data);
                    data = JSON.parse(data);
                    if (data.code < 0)
                    {
                        alert(data.message);
                    }else {
                        alert(data.message);
                        $location.path('/home');
                        $scope.$apply();
                    }
                },
                error:function (data) {
                    console.log(data);
                }
            })
        }
    });
