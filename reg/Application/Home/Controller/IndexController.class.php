<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller{
    // public function index(){
    //     // echo "string";
    //     $Data     = M('Data');// 实例化Data数据模型
    //     $result     = $Data->find(3);
    //     $this->assign('result',$result);
    //     $this->display();
    // }
    public function insert(){

        $User = D('User');
        $id = $_POST['stuid'];
        if (empty($id)) {
            $this->error('您没有填写学号！');
            exit;
        }
        $tel = trim($_POST['tel']);
        if (11 !== strlen($tel)) {
            $this->error('您的电话不是11位！');
            exit;
        }
        $res = $User->where('stuid='.$id)->find();

        // print_r($res);
        if (!empty($res)) {
            $this->error('该学号已报名 请检查学号或联系管理员！');
            exit;
        }

        if($User->create()){
            $result = $User->add();
            if($result) {
                $this->success('您已报名成功 谢谢！');
            }else{
                $this->error('出现了错误 请联系管理员！');
            }
        }else{
            $this->error($User->getError());
        }
        // print_r($_POST);
    }
    public function read(){
        $this->display();

    }
    public function find(){
        $User = M('User');
        $res = $User->find($_POST['stuid']);
        if ($res) {
            $this->assign('res',$res);
            $this->display();
        } else {
            $this->error('非法输入 请联系管理员！');
        }


    }

}
?>
