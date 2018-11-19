<?php /* Smarty version Smarty-3.1.16, created on 2018-11-19 14:11:06
         compiled from "tpl\admin\emplist.html" */ ?>
<?php /*%%SmartyHeaderCode:242075bf22a930da690-23820438%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b0f689178fb83355554e1df678052e5a07bce66c' => 
    array (
      0 => 'tpl\\admin\\emplist.html',
      1 => 1542633063,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '242075bf22a930da690-23820438',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bf22a933484e9_19586432',
  'variables' => 
  array (
    'emps' => 0,
    'emp' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf22a933484e9_19586432')) {function content_5bf22a933484e9_19586432($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="tpl/public/layui-v2.4.5/layui/css/layui.css">
    <!--<link rel="stylesheet" href="tpl/public/img/css/main.css">-->
    <style>
        #emplist {
            margin: 10px;
        }
        #emplist table{
            border-collapse: collapse;
            width:100%;
            border:1px solid #c6c6c6 !important;
            margin-bottom:20px;
        }
        #emplist table th{
            border-collapse: collapse;
            border-right:1px solid #c6c6c6 !important;
            border-bottom:1px solid #c6c6c6 !important;
            /*background-color:#ddeeff !important;*/
            background-color:#f2f2f2 !important;
            padding:5px 9px;
            font-size:14px;
            font-weight:normal;
            text-align:center;
        }
        #emplist table td{
            border-collapse: collapse;
            border-right:1px solid #c6c6c6 !important;
            border-bottom:1px solid #c6c6c6 !important;
            padding:5px 9px;
            font-size:12px;
            font-weight:normal;
            text-align:center;
            word-break: break-all;
        }
    </style>
</head>
<body>
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">员工管理系统 后台</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="">控制台</a></li>
            <li class="layui-nav-item"><a href="">用户管理</a></li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="http://t.cn/RCzsdCq" class="layui-nav-img">
                    管理员
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="index.php?controller=login&method=logout">退了</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">员工管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="index.php?controller=emplist&method=index">员工详情</a></dd>
                        <dd><a href="admin.php?controller=emplist&method=add">员工添加</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

    <div id="emplist" class="layui-body">
        <!-- 内容主体区域 -->
        <div class="layui-btn-group demoTable">
            <a href="admin.php?controller=emplist&method=add" class="layui-btn">添加员工</a>
        </div>
        <table style="margin-top: 10px">
            <thead>
            <tr>
                <th>编号</th>
                <th>姓名</th>
                <th>年龄</th>
                <th>部门</th>
                <th colspan="2">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php  $_smarty_tpl->tpl_vars['emp'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['emp']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['emps']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['emp']->key => $_smarty_tpl->tpl_vars['emp']->value) {
$_smarty_tpl->tpl_vars['emp']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['emp']->key;
?>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['emp']->value['Eno'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['emp']->value['Ename'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['emp']->value['Eage'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['emp']->value['Dname'];?>
</td>
                <td>
                    <a href="admin.php?controller=emplist&method=edit&Eno=<?php echo $_smarty_tpl->tpl_vars['emp']->value['Eno'];?>
" class="layui-btn layui-btn-normal" lay-event="edit">编辑</a>
                    <a class="layui-btn layui-btn-danger" lay-event="del">删除</a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © layui.com - 底部固定区域
    </div>
</div>
<script src="tpl/public/layui-v2.4.5/layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>

</body>
</html><?php }} ?>
