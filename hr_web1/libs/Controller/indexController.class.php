<?php
	class indexController{
		function index(){
		    $arr = DB::selectOne('SELECT * FROM items');
		    var_dump($arr);

//            $count = DB::exec("DELETE FROM area WHERE id = 8");
//            var_dump($count);

//			VIEW::assign(array('title'=>'快乐的一天', 'author'=>'开心的一天'));
//			VIEW::display('admin/test.html');
		}
	}
?>