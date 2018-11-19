<?php
	class indexController{
		function index(){

		    $arr = DB::select('select * from items');
		    //$arr = DB::selectOne('select * from items');
            //$arr = DB::exec('delete from country where id=8');
            //$arr = DB::exec("update country set name ='法国' where id = 7");
//            $arr = DB::exec("insert into country(name) values ('政策')");
            var_dump($arr);
//            VIEW::assign(array('title'=>'快乐的一天', 'author'=>'开心的一天'));
//			VIEW::display('admin/test.html');
		}
		function newsshow(){

        }
	}
