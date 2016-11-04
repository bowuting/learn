<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){   // 默认方法  取出商品分类并显示
        $goodsCat = D('goodsCat');
        $list = $goodsCat->getInfiniteGoodsCat();
        // dump($list);
        // exit;
        // $list = $goodsCat->select();
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
        // $goodsCat = M(goodsCat);
        // $list = $goodsCat->select();
        //
        // $this->assign('list',$list);

        $goodsCat = D('goodsCat');
        $list = $goodsCat->getInfiniteGoodsCat();
        $this->assign('list',$list);
        // dump($list);

        $this->display();
    }

    public function createGoodsCatAction(){

        // print_r($_POST);
        // exit;
        // echo I('get.id'); // 相当于 $_GET['id']

        $data['goodscat_name'] = I('post.name');
        $data['goodscat_sort'] = I('post.sort');
        $data['goodscat_pid'] = I('post.pid');
        $data['goodscat_createtime'] = time();

        $goodsCat = M('goodsCat');
        $result = $goodsCat->add($data);

            if($result > 0) {
              $status  = 1;
              if (IS_AJAX) {
                $this->ajaxReturn($status,"json");
              } else {
                $this->success('添加成功！');
              }
            } else {
                $this->error('添加错误！');
            }

    }


    public function deleteGoodsCat($id){

        $goodsCat = M(goodsCat);
        $res = $goodsCat->delete($id);
        if ($res > 0) {
          $status  = 1;
          if (IS_AJAX) {
            $this->ajaxReturn($status,"json");
          } else {
            $this->success('删除成功！');
          }
        } else {
          $this->error('删除失败！');
        }
    }




    public function updateGoodsCat(){

      $id = I('get.id');
      $goodsCat = M('goodsCat');
      $res = $goodsCat->find($id);
      // print_r($res);
      // exit;

      $goodsCat = D('goodsCat');
      $list = $goodsCat->getInfiniteGoodsCat();
      $this->assign('list',$list);

      // dump($list);

      $this->assign('res',$res);
      $this->display();
  }
  public function updateGoodsCatAction()
  {

        $id = I('post.id');
        $data['goodscat_pid'] = I('post.sort');
        $data['goodscat_name'] = I('post.name');
        $data['goodscat_sort'] = I('post.sort');
        $data['goodscat_pid'] = I('post.pid');

        $goodsCat = M('goodsCat');

        $res = $goodsCat->where('goodscat_id=' . $id)->save($data);
        if ($res > 0) {
          if (IS_AJAX) {
            $status = 1;    // ajax请求   返回状态码1
            $this->ajaxReturn($status,"json");
          } else {
            $this->success('更新成功！');
          }
        } else {
            $this->error('更新错误！');
        }

  }
}
