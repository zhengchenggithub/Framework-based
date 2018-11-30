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
<style type="text/css">
.inside2 input{display:block;width:830px;padding-left:10px;height:38px;line-height:38px;border:1px solid #e6e6e6;background-color:#fff;float:right;margin-bottom:20px}
.inside2 select{display:block;width:842px;padding-left:10px;height:40px;line-height:40px;border:1px solid #e6e6e6;background-color:#fff;float:right;margin-bottom:20px}
.inside2 span{width:127px;padding:9px 15px;line-height:20px;border:1px solid #e6e6e6;border-radius:2px 0 0 2px;text-align:center;background-color:#FBFBFB;float:left;margin-bottom:20px;border-right:0 solid #fff}
</style>

<div class="inside2">
	<div class="inwp cl">
    <?php
 defined('SAE_MYSQL_HOST_M') or define('SAE_MYSQL_HOST_M', '127.0.0.1'); defined('SAE_MYSQL_HOST_M') or define('SAE_MYSQL_PORT', '3306'); ?>
    <form action="/phpText/Tpt-Blog1.1/install.php?m=Install&amp;c=Install&amp;a=step2" method="post" target="_self">
            <h2>创建数据库</h2>
            
			<div class="cl">          
                <span>数据库类型</span>
                <select name="db[]">
	            <option>mysql</option>
                <option>mysqli</option>
                </select>
                
            </div>
            <div class="cl">
			    <span>数据库地址</span>
                <input type="text" name="db[]" value="<?php if(defined("SAE_MYSQL_HOST_M")): echo (SAE_MYSQL_HOST_M); else: ?>127.0.0.1<?php endif; ?>">
            </div>
            <div class="cl">
			    <span>数据库名</span>
                <input type="text" name="db[]" value="<?php if(defined("SAE_MYSQL_DB")): echo (SAE_MYSQL_DB); endif; ?>">
            </div>
            <div class="cl">
			    <span>数据库用户名</span>
                <input type="text" name="db[]" value="<?php if(defined("SAE_MYSQL_USER")): echo (SAE_MYSQL_USER); endif; ?>"> 
            </div>
            <div class="cl">
			    <span>数据库密码</span>
                <input type="password" name="db[]" value="<?php if(defined("SAE_MYSQL_PASS")): echo (SAE_MYSQL_PASS); endif; ?>"> 
            </div>
            <div class="cl">
			    <span>数据库端口</span>
                <input type="text" name="db[]" value="<?php if(defined("SAE_MYSQL_PORT")): echo (SAE_MYSQL_PORT); else: ?>3306<?php endif; ?>">
            </div>
            <div class="cl">
			    <span>数据库前缀</span>
                <input type="text" name="db[]" value="tpt_">
            </div>
        
		    <div class="inout1">
			<a href="<?php echo U('Install/step1');?>">上一步</a>
		    </div>
		    <div class="inout2">
			<a style="cursor: pointer;" type="button" onclick="$('form').submit();return false;">下一步</a>
		    </div>
	</form>
</div>
</div>
</body>
</html>