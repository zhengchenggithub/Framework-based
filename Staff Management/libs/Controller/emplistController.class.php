<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/19
 * Time: 10:54
 */
class emplistController
{
    public function __construct()
    {
        if (!$_SESSION['username'])
        {
            $url = "admin.php?controller=login&method=index";
            echo "<script>window.location.href='$url'</script>";
        }
    }
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
        //1.获取员工编号
        $no = $_REQUEST['Eno'];
        //2.通过编号查找员工信息
        $emps = M('emplist')->getEmp($no);
        //3.获取部门信息
        $depts = M('emplist')->getDepts();

        VIEW::assign(array('depts'=>$depts,'emps'=> $emps));
        VIEW::display('admin/editorEmp.html');
    }
    public function doEdit(){
        $no = $_REQUEST['Eno'];
        $Ename = $_REQUEST['Ename'];
        $Eage = $_REQUEST['Eage'];
        $Edeptno = $_REQUEST['Edeptno'];
        $count = M('emplist')->editEmp($no,$Ename,$Eage,$Edeptno);
        if ($count <= 1)
        {
            $this->showMessage('编辑成功','admin.php?controller=emplist&method=index');
        }else{
            $this->showMessage('编辑失败','admin.php?controller=emplist&method=edit');
        }

    }
    public function del(){
        $no =$_REQUEST['Eno'];
        M('emplist')->delEmp($no);


    }
    private function showMessage($info, $url){
        echo "<script>alert('$info');window.location.href='$url'</script>";
        exit;
    }
}
