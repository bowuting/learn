<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
        $this->display();
    }
    public function gallery(){
        $cid = I('get.cid');
        $keyword = I('get.keyword');
        $color = I('get.color');
        $price = I('get.price');
        $price_2 = I('get.price_2');
        $time = I('get.time');
        // echo $cid;
        $GoodsCatModel = D(GoodsCat);
        $result = $GoodsCatModel->getInfiniteGoodsCat();
        $this->assign('list',$result);

        $GoodsModel = D(Goods);


        // if (empty(I('get.'))) {
            // $goodsList = $GoodsModel->getGoods(null,null,null,$color);
        // } else {
            if ($GoodsCatModel->isHaveChild($cid)) {
                $cid  = $GoodsCatModel->getChildID($cid);
            }
            if (I('get.cid') === '0') {
              echo "string";
              $cid = $GoodsCatModel->getLastChildId($cid);
              // $goodsList = $GoodsModel->getAllGoods();
            }
            dump($cid);
            // exit;
            // echo $color;
            $goodsList = $GoodsModel->getGoods(null,$cid,$keyword,$color,$price,$price_2,$time);
            // dump($goodsList);
        // }
        // if (empty(I('get.'))) {
        //   $goodsList = $GoodsModel->getAllGoods();
        // }
        $this->assign('goodsList',$goodsList);
        $this->display();
    }

    public function goods(){
        $id = I('get.goods_id');
        $GoodsModel = D(Goods);
        $result = $GoodsModel->getOneGoods($id);
        $this->assign('goodsInfo',$result);
        // dump($result);
        $this->display();
    }
    public function addshopcart(){
        $m = M(mycart);
        $id = I('post.goods_id');
        dump(I('post.'));
        $cart_info = $m->where('mycart_goods_id='.$id)->find();
        dump($cart_info);
        // exit;
        if ($cart_info['mycart_goods_id'] == $id) {
            // echo $quantity;
            // $data['mycart_goods_id'] = $id;
            // echo $cart_info['mycart_quantity'];
            // echo "<hr/>";
            $new_quantity = $cart_info['mycart_quantity'] + 1;
            // echo $new_quantity;

            // $data['mycart_createtime'] = time();
            $res = $m->where('mycart_id='.$cart_info[mycart_id])->setField('mycart_quantity',$new_quantity);
            // $res = $m->save($data);
            if ($res > 0) {
                echo "添加成功";
                $status  = 1;
                if (IS_AJAX) {
                  $this->ajaxReturn($status,"json");
                }
            } else {
                echo "失败";
            }
        } else {
            $data['mycart_goods_id'] = $id;
            $data['mycart_quantity'] = 1;
            $data['mycart_createtime'] = time();

            $res = $m->add($data);
            if ($res > 0) {
                echo "添加成功";
                $status  = 1;
                if (IS_AJAX) {
                  $this->ajaxReturn($status,"json");
                }
            } else {
                echo "失败";
            }
        }


        // exit;


    }
}
