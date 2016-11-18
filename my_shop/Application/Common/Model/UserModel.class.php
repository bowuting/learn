<?php
namespace Common\Model;
use Think\Model;
class UserModel extends Model {
    public function getUserForPhone($phone){
        $m = M(user);
        $con['user_phone'] = $phone;
        $res = $m->where($con)->select();
        // dump($res);
        if (!empty($res)) {
            return true;
        } else {
            return false;
        }
    }
}

?>
