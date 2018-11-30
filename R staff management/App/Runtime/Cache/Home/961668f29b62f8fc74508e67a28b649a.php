<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/phpText/R staff management/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/phpText/R staff management/Public/css/main.css">
</head>
<body>
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">员工管理系统 后台</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item"><a href="">控制台</a></li>
            <li class="layui-nav-item"><a href="">用户管理</a></li>
            <!--<li class="layui-nav-item"><a href="">用户</a></li>-->
            <!--<li class="layui-nav-item">-->
            <!--<a href="javascript:;">其它系统</a>-->
            <!--<dl class="layui-nav-child">-->
            <!--<dd><a href="">邮件管理</a></dd>-->
            <!--<dd><a href="">消息管理</a></dd>-->
            <!--<dd><a href="">授权管理</a></dd>-->
            <!--</dl>-->
            <!--</li>-->
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
            <li class="layui-nav-item"><a href="<?php echo U('login/logout');?>">退了</a></li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a class="" href="javascript:;">员工管理</a>
                    <dl class="layui-nav-child">
                        <dd><a href="index">员工详情</a></dd>
                        <dd><a href="add">员工添加</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

    <div class="layui-body emp-content">
        <!-- 内容主体区域 -->
        <form class="layui-form" method="post" action="doeditor">
            <input type="hidden" name="Eno" value="<?php echo ($emp["eno"]); ?>">
            <div class="layui-form-item">
                <label class="layui-form-label">员工姓名</label>
                <input class="layui-input layui-input-inline" type="text" name="Ename" value="<?php echo ($emp["ename"]); ?>">
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">年龄</label>
                <input class="layui-input layui-input-inline" type="text" name="Eage" value="<?php echo ($emp["eage"]); ?>">
            </div>
            <div class="layui-form-item">
                <label class="layui-form-label">部门</label>
                <div class="layui-input-inline">
                    <select name="Edeptno">
                        <?php if(is_array($depts)): $i = 0; $__LIST__ = $depts;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$dept): $mod = ($i % 2 );++$i; if($emp['edeptno'] == $dept['dno']): ?><option selected value="<?php echo ($dept["dno"]); ?>"><?php echo ($dept["dname"]); ?></option>
                        <?php else: ?>
                        <option value="<?php echo ($dept["dno"]); ?>"><?php echo ($dept["dname"]); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div id="button_group" class="layui-form-item">
                <input class="layui-btn layui-btn-primary" type="button" value="返回" onclick="window.history.back()">
                <input class="layui-btn" type="submit" value="提交">
            </div>

        </form>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © layui.com - 底部固定区域
    </div>
</div>
<script src="/phpText/R staff management/Public/layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use(['element', 'form'], function () {
        var element = layui.element;

    });
</script>

</body>
</html>