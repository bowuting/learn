<?php

namespace Login\Controller;
use Think\Controller;

class IndexController extends Controller {

    public function registerFirst(){
        // self::verify();
        // dump($_SESSION['verify_code']);

        $this->display();
    }
    public function registerSecond(){
        echo "第二步";
        $data = I('post.');
        $this->assign('data',$data);
        $this->display();

    }
    public function verify() {
        $config = array(
            'fontSize' => 22, // 验证码字体大小
            'length' => 3, // 验证码位数
            'imageH' => 0,
            'imageW' => 0,
            'useCurve' => false,
            'useNoise' => false,
        );
        $Verify = new \Think\Verify($config);
        $Verify->entry();
    }


    public function ajaxIsThisPhoneRegistered(){
        // dump(I('post.'));
        $phone = I('post.phone');
        $User = D('User');
        $res = $User->getUserForPhone($phone);
        // dump($res);
        // exit;
         if (!$res) {
             echo "";
         } else {
             echo "已经被注册";
         }
    }

    public function ajaxCheckVerify(){
        $code = I('post.verify');
        $verify = new \Think\Verify();
        $res =  $verify->check($code,'');
        // dump($res);
        if ($res) {
            echo "";
        } else {
            echo "验证码错误";
        }
    }

}
