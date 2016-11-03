<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $goodsCat = M(goodsCat);
        $list = $goodsCat->where('1')->select();
        // $Page = new \Think\Page($count,2);// 实例化分页类 传入总记录数和每页显示的记录数(25)
        // $show = $Page->show();
        // $list = $goodsCat->where('1')->order('goodscat_createtime')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('list',$list);
        // $this->assign('page',$show);
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

        // print_r($_POST);
        // exit;

        // echo I('get.id'); // 相当于 $_GET['id']
        $data['goodscat_name'] = I('post.name');
        $data['goodscat_sort'] = I('post.sort');
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
          $data['status']  = 1;
          $data['content'] = '删除成功';
          $this->ajaxReturn($data,"json");
            //$this->success('删除成功！');
        } else {
            $this->error('删除错误！');
        }
    }
    public function updateGoodsCat(){

      $id = I('get.id');
      $goodsCat = M('goodsCat');
      $res = $goodsCat->find($id);
      //  print_r($res);
      // exit;
      $this->assign('res',$res);

    $this->display();
  }
  public function updateGoodsCatAction()
  {
      // if (IS_AJAX) {
        $id = I('post.id');
        $data['goodscat_name'] = I('post.name');
        $data['goodscat_sort'] = I('post.sort');

        $goodsCat = M('goodsCat');

        $res = $goodsCat->where('goodscat_id=' . $id)->save($data);
        if ($res > 0) {
          // $this->success('更新成功！');
          // exit;
          // $data = "成功";
          $data['status']  = 1;
          $data['content'] = '更新成功';
          $this->ajaxReturn($data,"json");
        } else {
            $this->error('更新错误！');
        }
        // $this->success('ajax');
      // }



  }
}
