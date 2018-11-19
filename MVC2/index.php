<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/13
 * Time: 17:09
 */
header("Content-Type: text/html; charset=UTF-8");
data_default_timezone_set('Asia/Shanghai');
require_once 'config.php';
require_once 'framework/pc.php';
PC::run($config);