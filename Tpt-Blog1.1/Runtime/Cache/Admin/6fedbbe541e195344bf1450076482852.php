<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>Tpt-Blog博客管理系统</title>
  <link rel="stylesheet" href="/phpText/Tpt-Blog1.1/Public/css/admin.css">
  <link rel="stylesheet" href="/phpText/Tpt-Blog1.1/Public/layui/css/layui.css">
  <script src="/phpText/Tpt-Blog1.1/Public/layui/layui.js"></script>
</head>
<body>
<div class="header">
<h2 class="z cl"><a href="<?php echo U('index/index');?>"><img src="/phpText/Tpt-Blog1.1/Public/img/logo.png"></a></h2>
<div class="y cl">
<a target="_blank" href="/phpText/Tpt-Blog1.1/index.php">网站首页</a>
<a href="<?php echo U('Login/logout');?>">退出</a>
</div>
</div>
<div class="admin">
<div class="aleft">
<h3><i class="layui-icon" style="position: relative;right: 3px;top: 1px;font-size: 18px;color: #009688;">&#xe643;</i>操作菜单</h3>
<ul class="cl">
<li><i class="layui-icon">&#xe601;</i><a href="<?php echo U('navtop/index');?>">导航管理</a></li>
<li><i class="layui-icon">&#xe61f;</i><a href="<?php echo U('category/index');?>">栏目管理</a></li>
<li><i class="layui-icon">&#xe63c;</i><a href="<?php echo U('article/index');?>">文章管理</a></li>
<li><i class="layui-icon">&#xe60c;</i><a href="<?php echo U('banner/index');?>">幻灯管理</a></li>
<li><i class="layui-icon">&#xe64e;</i><a href="<?php echo U('links/index');?>">友情连接</a></li>
</ul>
<h3><i class="layui-icon" style="position: relative;right: 3px;top: 1px;font-size: 18px;color: #009688;">&#xe614;</i>系统管理</h3>
<ul class="cl">
<li><i class="layui-icon">&#xe62c;</i><a href="<?php echo U('conf/index');?>">网站配置</a></li>
<li><i class="layui-icon">&#xe631;</i><a href="<?php echo U('member/index');?>">密码修改</a></li>
<li><i class="layui-icon">&#xe640;</i><a href="<?php echo U('runtime/index');?>">清理缓存</a></li>
<li><i class="layui-icon">&#x1006;</i><a href="<?php echo U('Login/logout');?>">立即退出</a></li>
</ul>
<h3><i class="layui-icon" style="position: relative;right: 3px;top: 1px;font-size: 18px;color: #009688;">&#xe612;</i>帮助中心</h3>
<ul class="cl">
<li><i class="layui-icon">&#xe63a;</i><a target="_blank" href="http://wenda.templet360.com/">社区问答</a></li>
</ul>
</div>
<div class="aright">
<div class="aright_1">
<blockquote style="padding: 10px;border-left: 5px solid #FF5722;" class="layui-elem-quote">欢迎使用Tpt-Blog博客管理系统，先温馨提醒几个常见问题：</blockquote>
<table width="100%">
<tr>
<td width="480px">程序正式上线运营请把index.php里面调试模式关闭；</td>
<td>确认服务器或空间开启了伪静态；</td>
</tr>
<tr>
<td>安装完成后请将根目录install文件和index.php里面安装代码删除；</td>
<td>请将程序内的所有文件直接放在根目录下，不要多层目录；</td>
</tr>
<tr>
<td>尽管本程序在发布前已经经过了若干严格测试，但我们依然强烈建议您随时备份；</td>
<td>程序安装好后一定记得修改密码和口令；</td>
</tr>
</table>
<blockquote style="padding: 10px;border-left: 5px solid #FF5722;" class="layui-elem-quote">系统信息：</blockquote>
<table width="100%">
<tr><td width="110px">程序版本</td><td>Tpt-Blog 1.1 博客管理系统 <a href="http://www.templet360.com/" style="color:#FF5722;" target="_blank">查看最新版本</a></td></tr>
<tr><td>服务器类型</td><td><?php echo php_uname('s');?></td></tr>
<tr><td>PHP版本</td><td><?php echo PHP_VERSION;?></td></tr>
<tr><td>Zend版本</td><td><?php echo Zend_Version();?></td></tr>
<tr><td>服务器解译引擎</td><td><?php echo $_SERVER['SERVER_SOFTWARE'];?></td></tr>
<tr><td>服务器语言</td><td><?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE'];?></td></tr>
<tr><td>服务器Web端口</td><td><?php echo $_SERVER['SERVER_PORT'];?></td></tr>
</table>
<blockquote style="padding: 10px;border-left: 5px solid #FF5722;" class="layui-elem-quote">开发团队：</blockquote>
<table width="100%">
<tr><td width="110px">版权所有</td><td>TPTCMS开发团队保留所有权利</td></tr>
<tr><td>感谢贡献者</td><td>Thinkphp，Layer，里程密，白俊遥，童老师</td></tr>
<tr><td>特别提醒您</td><td>本程序均可免费下载使用，但严禁删除、隐藏或更改版权信息，且导致的一切损失由使用者自行承担。</td></tr>
</table>
</div>      
</div>
</div>
</body>
</html>