<?php



class adminController{

    public $auth;
    public function __construct(){
//        session_start();
        if(!(isset($_SESSION['auth']))&&(PC::$method!='login')){
            $this->showmessage('请登录后在操作！', 'admin.php?controller=admin&method=login');
        }else{
            $this->auth = isset($_SESSION['auth'])?$_SESSION['auth']:array();
        }
    }

    public function index(){
        $newsobj = M('news');
        $newsnum = $newsobj->count();
        VIEW::assign(array('newsnum'=>$newsnum));
        VIEW::display('admin/index.html');
    }
    public function login(){
        if(!isset($_POST['submit'])){
            VIEW::display('admin/login.html');
        }else{
            $this->checklogin();
        }
    }

    public function logout(){
        unset($_SESSION['auth']);
        $this->showmessage('退出成功！', 'admin.php?controller=admin&method=login');
    }

    public function newsadd(){
        //判断是否有POST数据
        if (empty($_POST))  //没有POST数据，就显示添加，修改界面
        {
            //读取信息 需要传递新闻id $_GET['id'] 如果得到$_GET['id']说明是修改操作
            if (isset($_GET['id']))
            {
                $data = M('news') -> getnewsinfo($_GET['id']);
            }else{
                $data = array();
            }
            VIEW::assign(array('data' =>$data));
            VIEW::display('admin/newsadd.html');

        }else{//进入添加修改处理程序
            $this ->newssubmit();

        }
    }

    public function newslist(){
        $data = $this->getnewslist();
        VIEW::assign(array('data'=>$data));
        VIEW::display('admin/newslist.html');
    }

    public function newsdel(){
        if(intval($_GET['id'])){
            $newsobj = M('news');
            $newsobj->del_by_id(intval($_GET['id']));
            $this->showmessage('删除新闻成功！', 'admin.php?controller=admin&method=newslist');
        }
    }


    private function checklogin(){
        $authobj = M('auth');
        if ($authobj -> loginsubmit())
        {
            $this -> showmessage('登录成功','admin.php?controller=admin&method=index');
        }else{
            $this -> showmessage('登录失败','admin.php?controller=admin&method=login');
        }
    }

//    private function getnewsinfo(){
//        if(isset($_GET['id'])){
//            $id = intval($_GET['id']);
//            $newsobj = M('news');
//            return $newsobj->findOne_by_id($id);
//        }else{
//            return array();
//        }
//    }

    private function getnewslist(){
        $newsobj = M('news');
        return $newsobj->findAll_orderby_dateline();
    }

    private function newssubmit(){
        extract($_POST);
        if(empty($title)||empty($content)){
            $this->showmessage('请把新闻标题、内容填写完整再提交！', 'admin.php?controller=admin&method=newsadd');
        }
        $title = daddslashes($title);
        $content = daddslashes($content);
        $author = daddslashes($author);
        $from = daddslashes($from);
        $newsobj = M('news');
        $data = array(
            'title'=>$title,
            'content'=>$content,
            'author'=>$author,
            'from'=>$from,
            'dateline'=>time()
        );
        if($_POST['id']!=''){
            $newsobj ->update($data, intval($_POST['id']));
            $this->showmessage('修改成功！', 'admin.php?controller=admin&method=newslist');
        }else{
            $newsobj ->insert($data);
            $this->showmessage('添加成功！', 'admin.php?controller=admin&method=newslist');
        }
    }

    private function showmessage($info, $url){
        echo "<script>alert('$info');window.location.href='$url'</script>";
        exit;
    }
}
?>