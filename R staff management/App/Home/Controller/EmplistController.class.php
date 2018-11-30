<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/22
 * Time: 14:46
 */
namespace Home\Controller;

class EmplistController extends CommonController
{
    public function index()
    {
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
    public function add()
    {
        $depts = M('dept')->select();
        $this->assign('depts',$depts);
        $this->display();
    }
    public function doadd()
    {
        $Emp = M('emp');
        $data = $Emp->create();
        $result = $Emp->add($data);
        if ($result)
        {
            $this->success('添加成功',U('index'),1);
        }else{
            $this->error('添加失败');
        }
    }
    public function delete($no)
    {
        $result = M('emp')->where("Eno = {$no}")->delete();
        if ($result)
        {
            $this->success('删除成功',U('index'),1);
        }else{
            $this->error('删除失败');
        }
    }
    public function editor($no)
    {
        $emp = M('emp')->where("Eno = {$no}")->find();
        $depts = M('dept')->select();
        $this->assign(array('emp'=>$emp,'depts'=>$depts));
        $this->display();
    }
    public function doeditor()
    {
        $Emp = M('emp');
        $data = $Emp->create();
        $result = $Emp->save($data);
        if ($result)
        {
            $this->success('修改成功',U('index'),1);
        }else{
            $this->error('修改失败');
        }
    }


}