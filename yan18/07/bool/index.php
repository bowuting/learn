<?php



define('ACC',true);
include('./include/init.php');



//取出５条新品

$goods = new GoodsModel();
$newList  = $goods->getNew(5);
$female_id = 4;
$female_list = $goods->catGoods($female_id);
print_r($female_list);
include (ROOT . '/view/front/index.html');








 ?>
