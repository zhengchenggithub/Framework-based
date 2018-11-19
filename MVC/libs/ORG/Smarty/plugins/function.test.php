<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/8
 * Time: 18:29
 */
function smarty_function_test($params){//命名规则： smarty_function_插件名
        $width = $params['width'];
        $height = $params['height'];
        $area = $width*$height;
        return '面积为：'.$area;
}