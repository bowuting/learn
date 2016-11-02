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
        $goodsCat = M(goodsCat);
        $list = $goodsCat->select();

        $this->assign('list',$list);
        $this->display();
    }
    public function addGoodsCat(){

        print_r($_POST);
        exit;
        $data['goodscat_name'] = $_POST['name'];
        $data['goodscat_sort'] = $_POST['sort'];
        $data['goodscat_createtime'] = time();

        $goodsCat = M('goodsCat');
        $result =   $goodsCat->add($data);

            if($result > 0) {
                $this->success('添加成功！');
            } else {
                $this->error('添加错误！');
            }

    }
    public function deleteGoodsCat($id){
        // echo "string";
        // echo $id;
        $goodsCat = M(goodsCat);
        $res = $goodsCat->delete($id);
        if ($res) {
            $this->success('删除成功！');
        } else {
            $this->error('删除错误！');
        }
    }
    public function updateGoodsCat(){

    }

}
