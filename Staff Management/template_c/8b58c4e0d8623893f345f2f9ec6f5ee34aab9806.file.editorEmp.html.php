<?php /* Smarty version Smarty-3.1.16, created on 2018-11-19 09:45:40
         compiled from "tpl\admin\editorEmp.html" */ ?>
<?php /*%%SmartyHeaderCode:261305bf26b84eece64-48353338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8b58c4e0d8623893f345f2f9ec6f5ee34aab9806' => 
    array (
      0 => 'tpl\\admin\\editorEmp.html',
      1 => 1542617135,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261305bf26b84eece64-48353338',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_5bf26b85001a51_27696358',
  'variables' => 
  array (
    'emps' => 0,
    'depts' => 0,
    'dept' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5bf26b85001a51_27696358')) {function content_5bf26b85001a51_27696358($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>编辑</title>
</head>
<body>
<form method="post" action="admin.php?controller=emplist&method=doEdit">
    <div>
        <label>员工姓名</label>
        <input type="text" name="Ename" value="<?php echo $_smarty_tpl->tpl_vars['emps']->value['Ename'];?>
">
    </div>
    <div>
        <label>员工年龄</label>
        <input type="text" name="Eage" value="<?php echo $_smarty_tpl->tpl_vars['emps']->value['Eage'];?>
">
    </div>
    <div>
        <label>员工部门</label>
        <select name="Edeptno">
            <option value="$emps.Edeptno"><?php echo $_smarty_tpl->tpl_vars['emps']->value['Dname'];?>
</option>
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
