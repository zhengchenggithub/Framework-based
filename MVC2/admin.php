<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/12
 * Time: 16:18
 */
header("Content-Type: text/html; charset=UTF-8");
session_start();
require_once 'config.php';
require_once 'framework/pc.php';
PC::run($config);