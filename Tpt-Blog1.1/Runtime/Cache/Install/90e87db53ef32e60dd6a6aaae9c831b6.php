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
            <li class="innumber innumber1">2</li>
            <li class="inword">环境检测</li>
        </ul>
        <ul>
            <li class="innumber">3</li>
            <li class="inword">创建数据</li>
        </ul>
        <ul>
            <li class="innumber">4</li>
            <li class="inword">安装完成</li>
        </ul>
    </div>
</div>

<div class="inside2">
   <div class="inwp cl">


    <h2>环境检测</h2>
    <table width="100%">
            <tr>
                <th>项目</th>
                <th>所需配置</th>
                <th>当前配置</th>
            </tr>

            <?php if(is_array($env)): $i = 0; $__LIST__ = $env;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($item[0]); ?></td>
                    <td><?php echo ($item[1]); ?></td>
                    <td><?php echo ($item[3]); ?></td>       
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>

    
	<h2>目录、文件权限检查</h2>
	<table width="100%">

            <tr>
                <th>目录/文件</th>
                <th>所需状态</th>
                <th>当前状态</th>
            </tr>
            <?php if(is_array($dirfile)): $i = 0; $__LIST__ = $dirfile;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($item[3]); ?></td>
                    <td>可写</td>
                    <td><?php echo ($item[1]); ?></td>   
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>
    </table>




    <h2>函数依赖性检查</h2>
       <table width="100%">
            <tr>
                <th>函数名称</th>
                <th>检查结果</th>
            </tr>
            <?php if(is_array($func)): $i = 0; $__LIST__ = $func;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?><tr>
                    <td><?php echo ($item[0]); ?>()</td>
                    <td><i class="ico-<?php echo ($item[2]); ?>">&nbsp;</i><?php echo ($item[1]); ?></td>
                </tr><?php endforeach; endif; else: echo "" ;endif; ?>

    </table>



            <div class="inout1">
			<a href="<?php echo U('Index/index');?>">上一步</a>
		    </div>
		    <div class="inout2">
			<a href="<?php echo U('Install/step2');?>">下一步</a>
		    </div>

</div>
</div>
</body>
</html>