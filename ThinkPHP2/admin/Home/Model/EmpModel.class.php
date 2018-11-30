<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/22
 * Time: 14:56
 */
namespace Home\Model;

use Think\Model;

class EmpModel extends Model{
    public function getEmp(){
        return array('Eno' => '1001','Ename' =>'李雷');
    }
}