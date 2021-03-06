<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link href="/favicon.ico" rel="shortcut icon">
<title>Templet360 - 欢迎投稿</title>
<link rel="stylesheet" href="/phpText/Tpt-Blog1.1/Templet/default/Public/css/demo.css">
<link rel="stylesheet" href="/phpText/Tpt-Blog1.1/Public/layui/css/layui.css">
<script src="/phpText/Tpt-Blog1.1/Public/layui/layui.js"></script>
<link rel="stylesheet" href="/phpText/Tpt-Blog1.1/Public/wangEditor/css/wangEditor.min.css">
<script type="text/javascript" src="/phpText/Tpt-Blog1.1/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/phpText/Tpt-Blog1.1/Public/wangEditor/js/wangEditor.min.js"></script>
<style type="text/css">
.wp2 {
    width: 1200px;
    margin: 0 auto;
}
.cl {zoom: 1;}
.cl:after {content: '\20';display: block;height: 0;clear: both;visibility: hidden;}
.file-box { position:relative;width:800px} 
.file-txt {width:660px;height: 36px;line-height: 36px;background: #fff;border: 0px solid #fff;padding-left: 5px;} 
.file-box i {position: absolute;left: 16px;top: 11px;font-size: 16px;color: #5FB878;}
.file-btn:hover {border-color: #D2D2D2!important;}
.file-btn {width: 110px;height: 36px;line-height: 36px;background: #fff;border: 1px solid #e6e6e6;padding-left: 15px;border-radius: 2px;} 
.file-file {position:absolute;top:0;left:0; height:36px; filter:alpha(opacity:0);opacity: 0;width:110px } 
.footer a {color: #fff;}
.wangEditor-menu-container .menu-item a {padding: 12px 0;}
.wangEditor-menu-container .menu-item {height: 37px;width: 37px;}
.wangEditor-menu-container .menu-group {padding: 0;}
.wangEditor-container {border: 1px solid #e6e6e6;}

</style>
<div class="wp2 cl">

<h2 style="font-size: 24px;font-weight: 100;color: #333;text-align: center;margin: 30px 0px;">欢迎投稿</h2>



<form class="layui-form bform" method="post" action="<?php echo U('index/geetest_submit_check');?>" enctype="multipart/form-data">


  <div class="layui-form-item">
    <label class="layui-form-label">文章标题</label>
    <div class="layui-input-block">
      <input type="text" name="title" required lay-verify="required" placeholder="必填内容" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">文章作者</label>
    <div class="layui-input-block">
      <input type="text" name="author" required lay-verify="required" placeholder="必填内容" autocomplete="off" class="layui-input">
    </div>
  </div>

  <div class="layui-form-item">
    <label class="layui-form-label">缩略图</label>
     <div class="layui-input-block">
     <div class="file-box">
     <i class="layui-icon">&#xe61f;</i>
     <input class="file-btn" type="button" value="选择图片"> 
     <input class="file-txt" type="text" name="textfield" id="textfield"> 
     <input class="file-file" type="file" name="pic" id="pic" size="28" onchange="document.getElementById('textfield').value=this.value" /> 
     </div>
     </div>
  </div>

  <div class="layui-form-item layui-form-text">
    <label class="layui-form-label">文章内容</label>
    <div class="layui-input-block">
      <textarea id="textarea" name="content" required lay-verify="content" style="height:450px;width: 100%;"></textarea>
    </div>
  </div>

  <div style="padding: 20px 0px 40px 107px;" id="captcha"></div>

  <div class="layui-form-item">
    <div class="layui-input-block">
	  <button class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
      <button class="layui-btn layui-btn-primary" onclick="history.go(-1)">返回</button>
    </div>
  </div>

</form>
</div>
<script src="http://static.geetest.com/static/tools/gt.js"></script>
<script>
    var handler = function (captchaObj) {
        captchaObj.appendTo("#captcha");
     };
    $.get("<?php echo U('Index/geetest_show_verify');?>", function(data) {
        initGeetest({
            gt: data.gt,
            challenge: data.challenge,
            product: "float",
            offline: !data.success
        }, handler);
    },'json');
</script>
<script type="text/javascript">
    var editor = new wangEditor('textarea');
	editor.config.uploadImgUrl = "<?php echo U('index/doUploadPic');?>";
	editor.config.menus = $.map(wangEditor.config.menus, function(item, key) {
	if (item === 'eraser') {
	return null;
	}
	if (item === 'video') {
	return null;
	}
	if (item === 'location') {
	return null;
	}
	return item;
	});
	editor.config.pasteText = true;
    editor.create();
</script>
<script>
layui.use('form', function(){
  var form = layui.form()
  ,jq = layui.jquery;

	form.verify({
	content: function(value){
	if(value.replace(/<[^<>]+?>|[ ]|[&nbsp;]/g,'') == ''){
	return '内容不得为空';
	}
	}
	});

});
</script>
<div class="footer"><p class="bq"><a class="banquan" target="_blank" href="https://www.templet360.com/">Powered by Templet360</a></p></div>
</body>
</html>