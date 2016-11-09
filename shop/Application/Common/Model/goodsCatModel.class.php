<?php
namespace Common\Model;
use Think\Model;
class goodsCatModel extends Model {

  //得到所有分类
  public function getInfiniteGoodsCat(){


             $m=M('goods_cat');

             //order排序
             $list=$m->order("goodscat_sort")->select();

             function subtree($arr,$id=0,$lev=1) {
                 $subs = array(); // 子孙数组
                 foreach($arr as $v) {
                     if($v['goodscat_pid'] == $id) {
                         $v['lev'] = $lev;
                         $subs[] = $v;
                         $subs = array_merge($subs,subtree($arr,$v['goodscat_id'],$lev+1));
                     }
                 }
                 return $subs;
             }

             $list = subtree($list,0,1);
             return $list;

         }
}

?>
