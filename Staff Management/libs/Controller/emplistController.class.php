<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/19
 * Time: 10:54
 */
class emplistController
{
    public function index(){
        $emps = M('emplist')->getEmps();
        VIEW::assign(array('emps'=> $emps));
        VIEW::display('admin/emplist.html');
    }
    public function add(){
        $depts = M('emplist')->getDepts();
        VIEW::assign(array('depts'=>$depts));
        VIEW::display('admin/empadd.html');
    }
    public function doadd(){
        $Ename = $_REQUEST['Ename'];
        $Eage = $_REQUEST['Eage'];
        $Edeptno = $_REQUEST['Edeptno'];
        $count = M('emplist')->addEmp($Ename,$Eage,$Edeptno);
        if ($count >= 1)
        {
            $this->showMessage('添加成功','admin.php?controller=emplist&method=index');
        }else{
            $this->showMessage('添加失败','admin.php?controller=emplist&method=add');
        }
    }

    public function edit(){
        $Eno = $_REQUEST['Eno'];
        $emps = M('emplist')->getEmp($Eno);
        $depts = M('emplist')->getDepts();
        VIEW::assign(array('depts'=>$depts));
        VIEW::assign(array('emps'=> $emps));
        VIEW::display('admin/editorEmp.html');
    }
    public function doEdit(){
        $Ename = $_REQUEST['Ename'];
        $Eage = $_REQUEST['Eage'];
        $Edeptno = $_REQUEST['Edeptno'];
        $count = M('emplist')->editEmp($Ename,$Eage,$Edeptno);
        if ($count >= 1)
        {
            //$this->showMessage('编辑成功','admin.php?controller=emplist&method=index');
        }else{
            //$this->showMessage('编辑失败','admin.php?controller=emplist&method=index');
        }

    }
    private function showMessage($info, $url){
        echo "<script>alert('$info');window.location.href='$url'</script>";
        exit;
    }
}