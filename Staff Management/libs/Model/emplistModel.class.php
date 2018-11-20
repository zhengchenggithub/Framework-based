<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/19
 * Time: 11:00
 */
class emplistModel
{
    public function getEmps()
    {
        return DB::findAll("select * from tb_emp e LEFT JOIN  tb_dept d ON e.Edeptno = d.Dno ORDER BY e.Eno");
    }
    public function getDepts()
    {
        return DB::findAll('select * from tb_dept');
    }
    public function addEmp($name,$age,$no)
    {
        return DB::exec("insert into tb_emp (Ename,Eage,Edeptno) values ('{$name}',{$age},'{$no}')");
    }
    public function getEmp($no)
    {
        return DB::findOne("select * from tb_emp where Eno='{$no}'");
    }
    public function editEmp($no,$Ename,$Eage,$Edeptno)
    {
        return DB::exec("update tb_emp set Ename = '{$Ename}',Eage = {$Eage},Edeptno='{$Edeptno}' where Eno = {$no}");
    }
    public function delEmp($no)
    {
        return DB::exec("DELETE FROM tb_emp WHERE Eno='{$no}'");
    }
}
