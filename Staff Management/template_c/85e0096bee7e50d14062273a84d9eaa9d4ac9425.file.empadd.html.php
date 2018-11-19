<?php /* Smarty version Smarty-3.1.16, created on 2018-11-19 08:10:52
         compiled from "tpl\admin\empadd.html" */ ?>
<?php /*%%SmartyHeaderCode:24315bf25e050b55a2-92239991%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '85e0096bee7e50d14062273a84d9eaa9d4ac9425' => 
    array (
      0 => 'tpl\\admin\\empadd.html',
      1 => 1542611448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24315bf25e050b55a2-92239991',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bf25e0519c841_68998993',
  'variables' => 
  array (
    'depts' => 0,
    'dept' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf25e0519c841_68998993')) {function content_5bf25e0519c841_68998993($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>添加员工</title>
</head>
<body>
<h1>添加员工</h1>
<form method="post" action="admin.php?controller=emplist&method=doadd">
    <div>
        <label>员工姓名</label>
        <input type="text" name="Ename">
    </div>
    <div>
        <label>员工年龄</label>
        <input type="text" name="Eage">
    </div>
    <div>
        <label>员工部门</label>
        <select name="Edeptno">
            <?php  $_smarty_tpl->tpl_vars['dept'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['dept']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['depts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['dept']->key => $_smarty_tpl->tpl_vars['dept']->value) {
$_smarty_tpl->tpl_vars['dept']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['dept']->key;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['dept']->value['Dno'];?>
"><?php echo $_smarty_tpl->tpl_vars['dept']->value['Dname'];?>
</option>
            <?php } ?>
        </select>
    </div>
    <div>
        <input type="button" onclick="" value="返回">
        <input type="submit" value="确认">
    </div>
</form>

</body>
</html><?php }} ?>
