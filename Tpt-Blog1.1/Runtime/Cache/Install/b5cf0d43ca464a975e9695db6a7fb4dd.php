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
            <li class="innumber innumber1">1</li>
            <li class="inword">安装协议</li>
        </ul>
        <ul>
            <li class="innumber">2</li>
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
		<h2>安装使用协议：（以下简称协议）</h2>
		<p>1、感谢您使用由TPTCMS团队开发的网站内容管理系统（以下简称产品），致力于为您创建一个高效简洁但安全稳定的网站程序。</p>
		<p>2、不管您的网站是否整体使用本产品，还是部份使用本产品，都必须保留相关版权信息链接，如需要用于商业用途请联系官方授权。</p>
		<p>3、在未获取商业授权之前，不得将本产品用于商业用途（包括但不限于企业网站、经营性网站、以营利为目的或实现盈利的网站）。</p>
		<p>4、您出于自愿而使用本产品，就必须了解使用本产品的风险，我们不承诺对所有使用者提供任何形式的产品担保。</p>
		<p>5、本产品在发布前已经经过了若干严格测试，但我们依然强烈建议所有使用者在安装和升级前备份。</p>
		<p>6、本产品无法保证完全没有漏洞和缺陷（包括主题模板、定制开发等），所导致的一切损失由使用者自行承担。</p>
		<p>7、本产品只提供使用权，并非所有权，在未经过官方同意的情况下，严禁转售、赠送他人或与之关联的商业授权进行出租、出售或发放许可证。</p>
		<p>8、本产品禁止用于违反中华人民共和国宪法和法律法规的网站，应遵守《网络安全法》以及其他相关法律法规。</p>
		<p>9、本协议是您与TPTCMS之间关于您使用TPTCMS提供的所有产品及服务的法律协议。无论您是个人或组织、盈利与否、用途如何（包括以学习和研究为目的），均需仔细阅读本协议，包括免除或限制TPTCMS责任的免责条款以及对您的权利限制。</p>
		<p>10、本协议一旦发生变更，变更后的协议条款一旦在官方网站上公布即有效代替原来的协议。您可随时登陆TPTCMS官方网站查阅最新版协议。如果您选择接受本协议，即表示您同意接受协议各项条件的约束。如果您不同意本协议，则不能获得使用本产品的权利。您若有违反本协议规定，TPTCMS有权随时中止或终止您对本产品的使用资格并保留追究相关法律责任的权利。</p>
		<p>11、在理解、同意、并遵守本协议的全部条款后，方可开始使用本产品。本协议条款的解释、效力及纠纷的解决，适用于中华人民共和国法律。</p>
		<p>12、TPTCMS开发团队保留所有权利。</p>
		<div class="inout1">
			<a>拒绝安装</a>
		</div>
		<div class="inout2">
			<a href="<?php echo U('Install/step1');?>">同意安装</a>
		</div>
	</div>
</div>
</body>
</html>