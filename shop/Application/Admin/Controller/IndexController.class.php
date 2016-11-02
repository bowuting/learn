<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $goodsCat = M(goodsCat);
        $list = $goodsCat->select();

        $this->assign('list',$list);
        //  print_r($list);

        $this->display();
    }
    public function createGoodsCat(){
        // echo "string";
        $this->display();
    }
    public function addGoodsCat(){
        $data['goodscat_name'] = $_POST['name'];
        $data['goodscat_sort'] = $_POST['sort'];
        $data['goodscat_createtime'] = time();

        $goodsCat = M('goodsCat');
        $result =   $goodsCat->add($data);

            if($result > 0) {
                $this->success('数据添加成功！');
            }else{
                $this->error('数据添加错误！');
            }

    }
    public function deleteGoodsCat(){

    }
    public function updateGoodsCat(){

    }

}
