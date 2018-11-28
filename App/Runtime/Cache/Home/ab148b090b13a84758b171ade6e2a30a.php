<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/phpText/R staff management/Public/layui/css/layui.css">
    <link rel="stylesheet" href="/phpText/R staff management/Public/css/main.css">
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
        /*#emplist table tr:nth-child(odd){*/
        /*background-color:#fff !important;*/
        /*}*/
        /*#emplist table tr:nth-child(even){*/
        /*background-color: #f8f8f8 !important;*/
        /*}*/
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
                        <dd><a href="index.php?controller=emplist&method=index">员工详情</a></dd>
                        <dd><a href="<?php echo U('emplist/add');?>">员工添加</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

    <div id="emplist" class="layui-body">
        <!-- 内容主体区域 -->
        <div class="layui-btn-group demoTable">
            <a href="<?php echo U('emplist/add');?>" class="layui-btn">添加员工</a>
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
            <!--<?php if(is_array($emps)): $i = 0; $__LIST__ = $emps;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$emp): $mod = ($i % 2 );++$i;?>-->
            <!--<tr>-->
            <!--<td><?php echo ($emp["eno"]); ?></td>-->
            <!--<td><?php echo ($emp["ename"]); ?></td>-->
            <!--<td><?php echo ($emp["eage"]); ?></td>-->
            <!--<td><?php echo ($emp["dname"]); ?></td>-->
            <!--<td>-->
            <!--<a href="admin.php?controller=emplist&method=edit&Eno=<?php echo ($emp["Eno"]); ?>" class="layui-btn layui-btn-normal" lay-event="edit">编辑</a>-->
            <!--<a class="layui-btn layui-btn-danger" lay-event="del">删除</a>-->
            <!--</td>-->
            <!--</tr>-->
            <!--<?php endforeach; endif; else: echo "" ;endif; ?>-->
            <?php if(is_array($emps)): foreach($emps as $key=>$emp): ?><tr>
                    <td><?php echo ($emp["eno"]); ?></td>
                    <td><?php echo ($emp["ename"]); ?></td>
                    <td><?php echo ($emp["eage"]); ?></td>
                    <td><?php echo ($emp["dname"]); ?></td>
                    <td>
                        <a href="editor?no='<?php echo ($emp["eno"]); ?>'" class="layui-btn layui-btn-normal" lay-event="edit">编辑</a>
                        <a class="layui-btn layui-btn-danger" lay-event="del" onclick="showDel('<?php echo ($emp["eno"]); ?>','<?php echo ($emp["ename"]); ?>')">删除</a>
                    </td>
                </tr><?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © layui.com - 底部固定区域
    </div>
</div>
<script src="/phpText/R staff management/Public/layui/layui.js"></script>
<script>
    //JavaScript代码区域
    layui.use(['element', 'layer'], function(){
        var element = layui.element;

    });

    function showDel(eno,ename) {
        var layer = layui.layer;

        //询问框

        // layer.confirm('您是如何看待前端开发？', {
        //     btn: ['重要','奇葩'] //按钮
        // }, function(){
        //     layer.msg('的确很重要');
        // }, function(){
        //     layer.msg('也可以这样', {
        //         time: 20000, //20s后自动关闭
        //         btn: ['明白了', '知道了']
        //     });
        // });

        layer.confirm("确认删除"+ename+"?", {
            btn: ['确认','取消'] //按钮
        }, function(){
            location.href = 'delete?no='+eno;
            // layer.msg("删除成功！");
        });
    }
</script>

</body>
</html>