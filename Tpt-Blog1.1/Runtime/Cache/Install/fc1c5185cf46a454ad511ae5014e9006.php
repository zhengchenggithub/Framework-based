<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tpt-Blog博客管理系统安装程序</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script type="text/javascript" src="/phpText/Tpt-Blog1.1/Public/js/jquery.min.js"></script>
        <link rel="stylesheet" href="/phpText/Tpt-Blog1.1/Public/css/admin.css">
        <link rel="stylesheet" href="/phpText/Tpt-Blog1.1/Public/layui/css/layui.css">
    </head>
<body>
<div class="inside">
      <div class="inwp cl">  
		<h2><a href="/phpText/Tpt-Blog1.1/install.php"><img src="/phpText/Tpt-Blog1.1/Public/img/logo.png" alt="Tpt-Blog博客管理系统"></a></h2>
        <ul>
            <li class="innumber">1</li>
            <li class="inword">安装协议</li>
        </ul>
        <ul>
            <li class="innumber">2</li>
            <li class="inword">环境检测</li>
        </ul>
        <ul>
            <li class="innumber innumber1">3</li>
            <li class="inword">创建数据</li>
        </ul>
        <ul>
            <li class="innumber">4</li>
            <li class="inword">安装完成</li>
        </ul>
    </div>
</div>

    <script type="text/javascript">
        var list   = document.getElementById('show-list');
        function showmsg(msg, classname){
            var li = document.createElement('p'); 
            li.innerHTML = msg;
            classname && li.setAttribute('class', classname);
            list.appendChild(li);
            document.scrollTop += 30;
        }
    </script>

</body>
</html>