/**
 * Created by Administrator on 2017/10/25.
 */
angular.module('homeModule', [])
    .controller('homeCtrl', function ($scope) {

        $scope.item = {}; //临时商品对象
        $scope.index = -1; //编辑的索引号
        $scope.flag = -1; //区分添加、编辑状态
        $scope.goods = [];

        $scope.removeitem = function (index) {
            // $scope.goods.splice(index, 1);
            // console.log(index);
            dodeleteGoods($scope.goods[index].id,index);
        };

        $scope.add = function () {
            // $scope.item = {};
            flag = 0;
            $('#add').modal("show");
        }

        $scope.edit = function (index) {
            flag = 1;
            $scope.index = index;
            // $scope.item = $scope.goods[index];
            //把原对象拆开，生成一个新的对象：深度克隆
            for (key in $scope.goods[index]) {
                $scope.item[key] = $scope.goods[index][key];
            }
            $('#add').modal("show");
        }

        $scope.save = function () {
            if (flag === 0) {
                doAdd();
                //$scope.goods.push($scope.item);
            } else {
                doEdit();
                //$scope.goods[$scope.index] = $scope.item;
            }
            $scope.item = {};  //初始化item，避免重复引用
            $('#add').modal("hide");
        };

        //模态窗数据清除
        function clean() {
            $scope.item = {};
        }
        //1.将添加的数据传至服务端
        //2.添加成功后更新页面
        function initGoods() {
            $.ajax({
                url: "../Service/goods.php?type=init",
                type: "GET",
                success:function (data) {
                    console.log(data);
                    data = JSON.parse(data);
                    if (data.code < 0)
                    {
                        alert(data.message);
                        return;
                    }$scope.goods = data.content;
                    $scope.$apply();
                },
                error:function (data) {
                    console.log(data);
                }
            })
        }
        initGoods();
        function doAdd() {
            $.ajax({
                url: "../Service/goods.php?type=add",
                type: "POST",
                data: {
                    goodsName:$scope.item.goodsName,
                    price:$scope.item.price
                },
                success:function (data) {
                    console.log(data);
                    data = JSON.parse(data);
                    if (data.code < 0)
                    {
                        alert(data.message);
                        return;
                    }
                    $scope.goods.push(data.content);
                    alert(data.message);
                    $scope.$apply();

                },
                error:function (data) {
                    console.log(data);
                }
            })
        }
        function doEdit() {
            $.ajax({
                url: "../Service/goods.php?type=edit",
                type: "POST",
                data: {
                    id:$scope.goods[$scope.index].id,
                    goodsName:$scope.item.goodsName,
                    price:$scope.item.price
                },
                success:function (data) {
                    console.log(data);
                    data = JSON.parse(data);
                    if (data.code < 0)
                    {
                        alert(data.message);
                        return;
                    }
                    $scope.goods[$scope.index] = data.content;
                    alert(data.message);
                    $scope.$apply();

                },
                error:function (data) {
                    console.log(data);
                }
            })
        }
        function dodeleteGoods(id,index) {
            $.ajax({
                url: "../Service/goods.php?type=dele",
                type: "POST",
                data: {
                    id:id,
                },
                success:function (data) {
                    console.log(data);
                    data = JSON.parse(data);
                    if (data.code < 0)
                    {
                        alert(data.message);
                        return;
                    }
                    alert(data.message);
                    $scope.goods.splice(index,1);
                    $scope.$apply();

                },
                error:function (data) {
                    console.log(data);
                }
            })
        }
    });