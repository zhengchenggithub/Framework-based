<?php
/* Smarty version 3.1.33, created on 2018-11-07 12:30:28
  from 'D:\XAMPP\htdocs\phpText\SMARTY\tpl\test.js' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be2ccd4003088_00100285',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea142ba65528d43d1a57a14cd5d50934ec99ddd0' => 
    array (
      0 => 'D:\\XAMPP\\htdocs\\phpText\\SMARTY\\tpl\\test.js',
      1 => 1541590225,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be2ccd4003088_00100285 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\XAMPP\\htdocs\\phpText\\smarty-3.1.33\\libs\\plugins\\modifier.capitalize.php','function'=>'smarty_modifier_capitalize',),1=>array('file'=>'D:\\XAMPP\\htdocs\\phpText\\smarty-3.1.33\\libs\\plugins\\modifier.date_format.php','function'=>'smarty_modifier_date_format',),));
$_smarty_tpl->compiled->nocache_hash = '11900159515be2ccd3eebbd5_31844654';
echo smarty_modifier_capitalize($_smarty_tpl->tpl_vars['articletitle']->value);?>
<br />
<?php echo ($_smarty_tpl->tpl_vars['articletitle']->value).(" is good").(" yes");?>
<br />
  <?php echo nl2br($_smarty_tpl->tpl_vars['arr']->value['articlecontent']['title']);?>

<?php echo nl2br($_smarty_tpl->tpl_vars['arr']->value['articlecontent']['author']);?>

<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,"%H:%M:%S");?>
<br />
<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['time']->value,"%B,%e,%Y");?>
<br />
<?php echo (($tmp = @$_smarty_tpl->tpl_vars['articletitle1']->value)===null||$tmp==='' ? "没有" : $tmp);?>
<br />
<?php echo rawurlencode($_smarty_tpl->tpl_vars['url']->value);?>
<br />
<?php echo nl2br($_smarty_tpl->tpl_vars['zhengcheng']->value);
}
}
