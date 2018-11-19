<?php
/**
 * Created by PhpStorm.
 * User: 哆啦诚
 * Date: 2018/11/13
 * Time: 8:09
 */
class newsModel{
    public $_table = 'news';

    function count(){
        $sql = 'select count(*) from '.$this->_table;
        return DB::findResult($sql, 0, 0);
    }

    public function getnewsinfo($id){
        if (empty($id))
        {
            return array();
        }else{
            $id = intval($id);
            $sql = 'select * from '.$this -> _table.' where id= '.$id;
            return DB::selectOne($sql);
        }
    }
    function insert($data){
        return DB::insert($this->_table, $data);
    }

    function update($data, $id){
        return DB::update($this->_table, $data, 'id='.$id);
    }
    function findAll_orderby_dateline(){
        $sql = 'select * from '.$this->_table.' order by dateline desc';
        return DB::select($sql);
    }

    function findOne_by_id($id){
        $sql = 'select * from '.$this->_table.' where id='.$id;
        return DB::findOne($sql);
    }

    function del_by_id($id){
        return DB::del($this->_table, 'id='.$id);
    }
    function get_news_list(){
        $data = $this -> findAll_orderby_dateline();
        foreach ($data as $k => $news)
        {
            $data[$k]['content'] = mb_substr(strip_tags($data[$k]['content']),0,200);
            $data[$k]['dateline'] = date('Y-m-d H:i:s',$data[$k]['dateline']);
        }
        return $data;
    }

}