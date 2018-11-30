<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
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
                    <a href="admin.php?controller=emplist&method=edit&Eno=<?php echo ($emp["Eno"]); ?>" class="layui-btn layui-btn-normal" lay-event="edit">编辑</a>
                    <a class="layui-btn layui-btn-danger" lay-event="del">删除</a>
                </td>
            </tr><?php endforeach; endif; ?>
        </tbody>
    </table>
</div>

</body>
</html>