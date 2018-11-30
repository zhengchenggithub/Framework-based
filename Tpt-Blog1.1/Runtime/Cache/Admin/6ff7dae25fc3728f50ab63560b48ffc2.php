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

<fieldset class="layui-elem-field layui-field-title" style="margin: 20px 30px 20px 20px;">
  <legend>添加栏目</legend>
</fieldset>

<form class="layui-form bform" method="post" action="<?php echo U('Runtime/doClear');?>" enctype="multipart/form-data">

  <div class="layui-form-item">
    <label class="layui-form-label">模板缓存</label>
    <div class="layui-input-block">
      <input type="checkbox" name="data[]" value="Cache" title="清理" checked="">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">数据缓存</label>
    <div class="layui-input-block">
      <input type="checkbox" name="data[]" value="Temp" title="清理">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">数据目录</label>
    <div class="layui-input-block">
      <input type="checkbox" name="data[]" value="Data" title="清理">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">日志文件</label>
    <div class="layui-input-block">
      <input type="checkbox" name="data[]" value="Logs" title="清理">
    </div>
  </div>

  <div class="layui-form-item">
    <div class="layui-input-block">
	  <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
      <button class="layui-btn layui-btn-primary" onclick="history.go(-1)">返回</button>
    </div>
  </div>

</form>
<script>
layui.use('form', function(){
  var form = layui.form();
});
</script>
</div>
</div>
</body>
</html>