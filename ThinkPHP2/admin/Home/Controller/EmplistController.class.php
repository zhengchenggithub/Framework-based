<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/22
 * Time: 14:46
 */
namespace Home\Controller;
use Think\Controller;

class EmplistController extends Controller {
    public function index(){
        //普通实例化模型
//        $empModel = new EmpModel();

        //ThinkPHP内置方法实例化模型--D方法
        $empModel = D('Emp');

        //ThinkPHP内置方法实例化模型--D方法
        $empModel =M('Emp');
//        $emp = $empModel->getEmp();
        //使用简单的SQL查询如下：
       // $emps = $empModel->query("select * from tb_emp e LEFT JOIN  tb_dept d ON e.Edeptno = d.Dno ORDER BY e.Eno");

        //使用JION连接查询如下：

       $emps = $empModel
            ->join('LEFT JOIN __DEPT__ ON __EMP__.Edeptno = __DEPT__.Dno')
            ->select();

        $this->assign('emps',$emps);
        $this->display();
    }
}