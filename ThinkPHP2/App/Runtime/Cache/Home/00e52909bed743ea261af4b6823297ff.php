<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>




 <!-- 对参数进行md5加密以及字符串的截取-->
<br />



<tr>
<?php if(is_array($zc)): $i = 0; $__LIST__ = $zc;if( count($__LIST__)==0 ) : echo "没有数据" ;else: foreach($__LIST__ as $key=>$a): $mod = ($i % 2 );++$i;?><td><?php echo ($a["name"]); ?></td>
    <td><?php echo ($a["age"]); ?></td>
    <td><?php echo ($a["sex"]); ?></td><?php endforeach; endif; else: echo "没有数据" ;endif; ?>
</tr>
<br />
<tr>
    <?php if(is_array($zc)): foreach($zc as $key=>$a): ?><td><?php echo ($a["name"]); ?></td>
        <td><?php echo ($a["age"]); ?></td>
        <td><?php echo ($a["sex"]); ?></td><?php endforeach; endif; ?>
</tr>
</body>
</html>