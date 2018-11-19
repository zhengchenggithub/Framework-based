<?php /* Smarty version Smarty-3.1.16, created on 2018-11-19 14:54:51
         compiled from "tpl\admin\login.html" */ ?>
<?php /*%%SmartyHeaderCode:245765bf21540a86669-35357024%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c80e3fb42803f2b44cb2faa36ed4473503b114f' => 
    array (
      0 => 'tpl\\admin\\login.html',
      1 => 1542635689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '245765bf21540a86669-35357024',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bf21540d7be22_54637295',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf21540d7be22_54637295')) {function content_5bf21540d7be22_54637295($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
    <link rel="stylesheet" href="tpl/public/layui-v2.4.5/layui/css/layui.css">
    <style>
        body{
            background-color: #009688;
        }
        .div1{
            width: 500px;
            height: 500px;
            background-color: white;
            position:absolute;
            left:0;
            top: 0;
            bottom: 0;
            right: 0;
            margin: auto;
        }
        .layui-input-block {
            margin-left: 80px;
            margin-top: 30px;
            margin-right: 80px;
        }
        .layui-input{
            height: 50px;
        }
        h1{
            font-family: "微软雅黑";
            font-size: 40px;
            text-align: center;
            margin-top: 50px;
        }
    </style>
</head>
<body>
<div class="div1">
    <label><h1>员工管理系统</h1></label>
<form class="layui-form" method="post" action="admin.php?controller=login&method=login">
    <div class="layui-form-item">
        <div class="layui-input-block">
            <input type="text" name="username" required  lay-verify="required" placeholder="请输入用户名" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-input-block">
            <input type="password" name="password" required lay-verify="required" placeholder="请输入密码" autocomplete="off" class="layui-input">
        </div>
    </div>

    <div class="layui-form-item">
        <div class="layui-input-block">
            <div class="layui-row">
            <input  class="layui-btn layui-col-md5 layui-bg-green" type="submit" value="登录">
            <input  class="layui-btn layui-col-md5 layui-bg-blue" value="注册">
            </div>
        </div>
    </div>

</form>
    </div>
<script src="tpl/public/layui-v2.4.5/layui/layui.js"></script>
</body>
</html><?php }} ?>
