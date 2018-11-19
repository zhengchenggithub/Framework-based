/**
 * Created by Administrator on 2017/10/25.
 */
angular.module('registerModule', [])
    .controller('registerCtrl', function ($scope,$location) {
        console.log('register');

        $scope.register = function(){
            console.log($scope.area);
            dbRegister();
        }
        var dbRegister = function () {
            $.ajax({
                url: "../Service/register.php?type=reg",
                type: "POST",
                // async: false,//ajax的异步传输，默认情况为同步--true   ----- 第一种方法，不推荐使用
                data: {
                    username:$scope.username,
                    password:$scope.password,
                    email:$scope.email,
                    area:$scope.area.name
                },
                success:function (data) {
                    console.log(data);
                    data = JSON.parse(data);
                    if (data.code != 10000)
                    {
                        alert(data.message);
                        return;
                    }else {
                        alert(data.message);
                        $location.path('/login');
                        $scope.$apply();                        //--------------  第二种方法
                    }
                },
                error:function (data) {
                    console.log(data);
                }
            })
        }
        $scope.areas = [];
        function initArea() {
            $.ajax({
                url: "../Service/register.php?type=init",
                type: "GET",
                // async: false,//ajax的异步传输，默认情况为同步--true   ----- 第一种方法，不推荐使用
                success:function (data) {
                    data = JSON.parse(data);
                    if (data.code == 10000)
                    {
                        $scope.areas = data.content;
                        $scope.area = $scope.areas[0];
                        $scope.$apply();
                    }

                },
                error:function (data) {
                    console.log(data);
                }
            })
        }
        initArea();
    });