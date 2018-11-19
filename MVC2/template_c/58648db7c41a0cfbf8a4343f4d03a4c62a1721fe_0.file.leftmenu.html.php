<?php
/* Smarty version 3.1.33, created on 2018-11-13 03:57:52
  from 'D:\XAMPP\htdocs\phpText\MVC2\tpl\admin\leftmenu.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5bea3db05802c4_20697506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '58648db7c41a0cfbf8a4343f4d03a4c62a1721fe' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\phpText\\MVC2\\tpl\\admin\\leftmenu.html',
      1 => 1402838738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bea3db05802c4_20697506 (Smarty_Internal_Template $_smarty_tpl) {
?><aside id="sidebar" class="column">
	<h3>新闻管理</h3>
	<ul class="toggle">
		<li class="icn_new_article"><a href="admin.php?controller=admin&method=newsadd">添加新闻</a></li>
		<li class="icn_categories"><a href="admin.php?controller=admin&method=newslist">管理新闻</a></li>
	</ul>
	<h3>管理员管理</h3>
	<ul class="toggle">
		<li class="icn_jump_back"><a href="admin.php?controller=admin&method=logout">退出登录</a></li>
	</ul>
	
	<footer>
		
	</footer>
</aside><!-- end of sidebar --><?php }
}
