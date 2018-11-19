<?php
/* Smarty version 3.1.33, created on 2018-11-08 13:02:43
  from 'D:\XAMPP\htdocs\phpText\SMARTY\tpl\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be425e3430629_54428410',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6503b3e026766e097cf226e4b133293ff646d149' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\phpText\\SMARTY\\tpl\\content.tpl',
      1 => 1541678560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be425e3430629_54428410 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\XAMPP\\htdocs\\phpText\\smarty-3.1.33\\libs\\plugins\\block.test2.php','function'=>'smarty_block_test2',),));
$_smarty_tpl->smarty->_cache['_tag_stack'][] = array('test2', array('replace'=>'true','maxnum'=>29));
$_block_repeat=true;
echo smarty_block_test2(array('replace'=>'true','maxnum'=>29), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['str']->value;?>

<?php $_block_repeat=false;
echo smarty_block_test2(array('replace'=>'true','maxnum'=>29), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);
}
}
