<?php
require_once 'json.php';
require_once 'dbhelper.php';
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/10/30
 * Time: 14:45
 */
$connect = Db::getInstance() ->connect();

//取得数据
$type = $_REQUEST["type"];
$user = $_REQUEST["userid"];

if ($type == 'list')//获取活动列表
{
    $result = mysql_query("select a.activityid, a.title,a.description,a.create_date,a.participants,a.alreadylnvoled,ua.userid
    from activity as a left join (select * from user_activity where userid=$user) as ua on a.activityid = ua.activityid
    ");
    $output = array();//所有的活动信息
    if (mysql_num_rows($result) > 0)
    {
        while ($r = mysql_fetch_array($result))
        {
            $activity = array(
                'activityid' => (int)$r['activityid'],
                'title' => $r['title'],
                'description' => $r['description'],
                'create_date' => $r['create_date'],
                'participants' => (int)$r['participants'],
                'alreadylnvoled' => (int)$r['alreadylnvoled'],
                'userid' => (int)$r['userid']);
            array_push($output,$activity);
        }
        Response::json('100001','活动信息',$output);
    }else{//没有活动信息
        Response::json('100002','没有活动信息');
    }
}else{//参与活动
    //1.确定用户是否已经登录
    $activityId = $_REQUEST['activityid'];
    $token = $_REQUEST['token'];
    $result = mysql_query("select userid,telephone,password,nickname from account where userid =".$user."and token = '".$token."'");
    if (mysql_num_rows($result) == 0)
    {
        Response::json('-10001','未登录，请重新登录');
    }else{
        //2.更新活动列表中已参与活动的人数
        $result = mysql_query("update activity set alreadylnvoled = alreadylnvoled + 1 where activityid=".$activityId." ");
        if ($result == true)
        {
            //3.在用户活动关系表中新增一条当前用户的记录
            $result = mysql_query("insert into user_activity(userid,activityid) values ($user,$activityId)");
            if ($result == true)
            {
                Response::json('100001','参与成功');
            }else{
                Response::json('-100002','参与失败');
            }
        }else{
            Response::json('-100001','参与失败');
        }
    }


}
