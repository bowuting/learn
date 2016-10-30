<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller{
    public function index(){
        // echo "string";
        $Data     = M('Data');// 实例化Data数据模型
        $result     = $Data->find(3);
        $this->assign('result',$result);
        $this->display();
    }
}
?>
