<?php
/* Smarty version 3.1.33, created on 2018-11-08 12:44:53
  from 'D:\XAMPP\htdocs\phpText\SMARTY\tpl\datetime.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be421b5abf3e9_23929510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '883ac096c4cf2a609818c22142b077271e263307' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\phpText\\SMARTY\\tpl\\datetime.tpl',
      1 => 1541677471,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be421b5abf3e9_23929510 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\XAMPP\\htdocs\\phpText\\smarty-3.1.33\\libs\\plugins\\modifier.test.php','function'=>'smarty_modifier_test',),));
echo smarty_modifier_test($_smarty_tpl->tpl_vars['time']->value,'Y-m-d H:i:s');
}
}
