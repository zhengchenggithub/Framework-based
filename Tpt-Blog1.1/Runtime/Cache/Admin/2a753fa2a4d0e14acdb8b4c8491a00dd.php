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
<script type="text/javascript" src="/phpText/Tpt-Blog1.1/Public/js/jquery.min.js"></script>
<div class="aright">
<style type="text/css">
.tpt_sels a{padding-right:15px;position:relative}
.tpt_sels a{padding:0 20px 0 8px;color:#3B6268;background:#FFFFBA;border:1px #F8E06E solid;margin-right:5px;margin-bottom:5px;font-size:14px;height:26px;line-height:26px;display:block;float:left}
.tpt_sels a em{width: 12px;height: 12px;font-style: normal;display: block;position: absolute;top: 7px;right: 4px;z-index: 2;background: url(/phpText/Tpt-Blog1.1/Public/img/sx.png) no-repeat 0 0;}
</style>
<div class="layui-tab" lay-filter="demo" style="margin: 20px 30px 20px 20px;">
  <ul class="layui-tab-title">
    <li class="layui-this">基本设置</li>
    <li>常用设置</li>
  </ul>
  <div class="layui-tab-content">
    <div class="layui-tab-item layui-show">

<form class="layui-form bform" method="post" action="<?php echo U('conf/doedit');?>" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?php echo ($c["id"]); ?>">
  
  <div class="layui-form-item">
    <label class="layui-form-label">网站域名</label>
    <div class="layui-input-block">
      <input type="text" name="yuming" value="<?php echo ($c["yuming"]); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">网站作者</label>
    <div class="layui-input-block">
      <input type="text" name="author" value="<?php echo ($c["author"]); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">作者QQ</label>
    <div class="layui-input-block">
      <input type="text" name="qqs" value="<?php echo ($c["qqs"]); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">备案号</label>
    <div class="layui-input-block">
      <input type="text" name="beian" value="<?php echo ($c["beian"]); ?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">开启投稿</label>
    <div class="layui-input-block">
      <input type="checkbox" title="开启" name="open" value="1" <?php if($c['open'] == 1): ?>checked<?php endif; ?>>
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">LOGO</label>
     <div class="layui-input-block">
     <div class="file-box">
     <i class="layui-icon">&#xe61f;</i>
     <input class="file-btn" type="button" value="选择图片"> 
     <input class="file-txt" type="text" autocomplete="off" name="textfield" id="textfield"><?php if($c[logo] != ''): ?><img src="/phpText/Tpt-Blog1.1/Uploads<?php echo ($c["logo"]); ?>" height="30"><?php else: endif; ?>
     <input class="file-file" type="file" name="logo" id="logo" size="28" onchange="document.getElementById('textfield').value=this.value" /> 
     </div>
     </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">网站标题</label>
    <div class="layui-input-block">
      <input type="text" name="title" value="<?php echo ($c["title"]); ?>" placeholder="必填内容" required lay-verify="required" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">关键字</label>
    <div class="layui-input-block">
      <textarea name="keywords" placeholder="请输入内容" class="layui-textarea"><?php echo ($c["keywords"]); ?></textarea>
    </div>
  </div>

  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">网站描述</label>
    <div class="layui-input-block">
      <textarea name="description" placeholder="请输入内容" class="layui-textarea"><?php echo ($c["description"]); ?></textarea>
    </div>
  </div>

  <div class="layui-form-item">
    <div class="layui-input-block">
	  <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
      <button class="layui-btn layui-btn-primary" onclick="history.go(-1)">返回</button>
    </div>
  </div>

</form>
	
	</div>
    <div class="layui-tab-item">


	<form class="layui-form bform" method="post" action="<?php echo U('conf/webconf');?>" enctype="multipart/form-data">

  <div class="layui-form-item">
    <label class="layui-form-label">模板名称</label>
    <div class="layui-input-block">
      <input type="text" name="WEB_TPT" value="<?php echo C('WEB_TPT');?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">伪静态</label>
    <div class="layui-input-block">
      <input type="radio" name="WEB_URL" value="1" title="开启" <?php if(C('WEB_URL') == 1): ?>checked<?php endif; ?>>
      <input type="radio" name="WEB_URL" value="0" title="关闭" <?php if(C('WEB_URL') == 0): ?>checked<?php endif; ?>>
    </div>
  </div>

  <blockquote style="padding: 10px;border-left: 5px solid #FF5722;margin: 10px 0 20px 40px;" class="layui-elem-quote">请自行申请留言系统ID：<a href="http://changyan.kuaizhan.com/" style="color:#FF5722;" target="_blank">申请网址</a></blockquote>

   <div class="layui-form-item">
    <label class="layui-form-label">畅言ID</label>
    <div class="layui-input-block">
      <input type="text" name="WEB_CID" value="<?php echo C('WEB_CID');?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">畅言KEY</label>
    <div class="layui-input-block">
      <input type="text" name="WEB_CKEY" value="<?php echo C('WEB_CKEY');?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
    </div>
  </div>


  <blockquote style="padding: 10px;border-left: 5px solid #FF5722;margin: 10px 0 20px 40px;" class="layui-elem-quote">此验证码ID和KEY仅供测试，请自行申请：<a href="http://www.geetest.com/" style="color:#FF5722;" target="_blank">申请网址</a></blockquote>
  
  <div class="layui-form-item">
    <label class="layui-form-label">验证码ID</label>
    <div class="layui-input-block">
      <input type="text" name="GEETEST_ID" value="<?php echo C('GEETEST_ID');?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
    </div>
  </div>
  
  <div class="layui-form-item">
    <label class="layui-form-label">验证码KEY</label>
    <div class="layui-input-block">
      <input type="text" name="GEETEST_KEY" value="<?php echo C('GEETEST_KEY');?>" placeholder="请输入内容" autocomplete="off" class="layui-input">
    </div>
  </div>

  <blockquote style="padding: 10px;border-left: 5px solid #FF5722;margin: 10px 0 20px 40px;" class="layui-elem-quote">这里可以填写你比较常用的热门标签或关键字：</blockquote>
 
  <div class="tpt_item">
	<input type="hidden" name="WEB_TAG" value="<?php echo C('WEB_TAG');?>">
	<div id="tpt_sel" class="tpt_sels" style="margin-top: 20px;">
		<span style="margin-bottom: 5px;float: left;margin-left: 110px;">
		<?php if(C('WEB_TAG') != ''): $arr=explode(',', C('WEB_TAG'));foreach ($arr as $k=>$v){echo "<a href='javascript:;'>$v<em></em></a>";} endif; ?>
		</span>
		<div class="layui-form-item" style="margin-bottom: 20px;">
			<label class="layui-form-label">文章标签</label>
			<div class="layui-input-block">
				<input id="tpt_input" type="text" value="" autocomplete="off" class="layui-input" style="width: 400px;float: left;margin-right: 20px;">
				<button class="layui-btn" id="tpt_btn" type="button" style="background: #FF5722;">添加标签</button>
			</div>
		</div>
	</div>
  </div>
  
  <div class="layui-form-item">
    <div class="layui-input-block">
	  <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
      <button class="layui-btn layui-btn-primary" onclick="history.go(-1)">返回</button>
    </div>
  </div>

</form>
	
	
	</div>
  </div>
</div>
<script type="text/javascript">
$(function() {
	$('#tpt_input').keydown(function(e) {
		if (e.which === 13) {
			$("#tpt_btn").click();
			e.preventDefault();
			return false;
		}
	});
	$("#tpt_sel").on('click', 'a>em', function() {
		var name = "WEB_TAG";
		var tag = $(this).parent().text();
		$(this).parent().remove();
		var tags = new Array();
		$("#tpt_sel").find('a').each(function() {
			tags.push($(this).text());
		});
		$("input[name=" + name + "]").val(tags.join(","));
		$("#tpt_pre a:contains('" + tag + "')").removeClass("selected");
	});
	$("#tpt_btn").click(function() {
		var name = "WEB_TAG";
		var tags = $.trim($("input[name=" + name + "]").val());
		if (tags !== "") {
			tags = tags.split(",");
		} else {
			tags = new Array();
		}
		var tag = $.trim($("#tpt_input").val());
		if (tag !== '' && $.inArray(tag, tags) === -1) {
			tags.push(tag);
			$("#tpt_pre a:contains('" + tag + "')").addClass("selected");
		}
		$("#tpt_sel").children('span').empty();
		$.each(tags, function(k, v) {
			$("#tpt_sel").children('span').append('<a href="javascript:;">' + v + '<em></em></a>');
		});
		$("input[name=" + name + "]").val(tags.join(","));
		$("#tpt_input").val('');
	});
	$("#tpt_pre").on('click', 'a:not(.selected)', function() {
		var name = "WEB_TAG";
		var tags = $.trim($("input[name=" + name + "]").val());
		if (tags !== "") {
			tags = tags.split(",");
		} else {
			tags = new Array();
		}
		var tag = $.trim($(this).text());
		if (tag !== '' && $.inArray(tag, tags) === -1) {
			tags.push(tag);
		}
		$("#tpt_sel").children('span').empty();
		$.each(tags, function(k, v) {
			$("#tpt_sel").children('span').append('<a href="javascript:;">' + v + '<em></em></a>');
		});
		$("input[name=" + name + "]").val(tags.join(","));
		$(this).addClass('selected');
	});
});
</script>
<script>
layui.use('form', function(){
  var form = layui.form();
});
layui.use('element', function(){
  var element = layui.element();
  element.on('tab(demo)', function(data){
    console.log(data);
  });
});
</script>
</div>
</div>
</body>
</html>