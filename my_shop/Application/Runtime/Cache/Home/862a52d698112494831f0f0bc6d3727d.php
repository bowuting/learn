<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="cn">

    <meta charset="UTF-8">


<link href="//cdn.bootcss.com/semantic-ui/2.2.6/semantic.css" rel="stylesheet">
<link href="//cdn.bootcss.com/layer/2.4/skin/layer.css" rel="stylesheet">


<link rel="stylesheet"	href="/my_shop/Public/using/validator/jquery.validator.css">


</head>
<body>


<div class="ui container">

    <div class="ui menu">
    <a class="item" href="/my_shop/index.php/Home/">
        首页
    </a>
    <a class="item" href="/my_shop/index.php/admin/">
        后台
    </a>
    <a class="item" href="/my_shop/index.php/Home/Index/gallery/cid/0">
        商品列表
    </a>
    <a class="item" href="/my_shop/index.php/Login/Index/registerFirst">
        注册
    </a>
    <form class="item" action="/my_shop/index.php/Home/Index/gallery/" method="get">
    <div class="ui input">
        <input type="text"  name="keyword" placeholder="Search...">
        <button type="submit" class="ui basic button">商品名搜索</button>
    </div>
    </form>

</div>

    <div class="ui grid">

        <div class="eight wide column">
          <form class="" action="/my_shop/index.php/Home/Index/addshopcart" method="post">
              <input type="hidden" id="goods_id" name="goods_id" value="<?php echo ($goodsInfo['goods_id']); ?>">
              <input type="submit"  value="加入购物车">
          </form>
          <h2 class="ui header"><?php echo ($goodsInfo['goods_name']); ?></h2>

          <hr>

          <h3 class="ui header">商品货号：<?php echo ($goodsInfo['goods_id']); ?></h3>
          <h3 class="ui header"><?php echo ($goodsInfo['goods_desc']); ?></h3>
          <h3 class="ui header">上架时间：<?php echo (date("Y-m-d  ",$goodsInfo["goods_createtime"])); ?></h3>
          <h3 class="ui header">￥:<?php echo ($goodsInfo['goods_price'] / 100); ?></h3>
          <img src="<?php echo ($goodsInfo['goods_pic']); ?>" alt="" />
        </div>
          <div class="three wide column">
            <button class="ui primary button add-shopcart-btn"><i class="add to cart icon"></i>加入购物车 </button>
            <hr>
            <button class="ui olive button my-shopcart-btn"><i class="add to cart icon"></i>我的购物车 </button>

          </div>

    </div>

</div>

</body>

<script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>

<script src="//cdn.bootcss.com/semantic-ui/2.2.6/semantic.js"></script>
<script src="//cdn.bootcss.com/layer/2.4/layer.js"></script>



<script type="text/javascript" src="/my_shop/Public/using/validator/jquery.validator.js"></script>
<script type="text/javascript" src="/my_shop/Public/using/validator/local/zh-CN.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
      $(".add-shopcart-btn").click(function(){
        // alert('加入购物车');
        
        $.post("/my_shop/index.php/Home/Index/addshopcart",
          {
            id:$("#goods_id").val(),
          },
          function (status) {
            if (status == 1) {
              layer.open({
              content: '添加成功',
              btn: ['好的'],
              yes: function(){
                  window.location.reload()}
              // cancel: function(){
              //     //右上角关闭回调
              //     window.location.reload()}
                });
            }
          });
          // alert('加入购物车');
      });


      $(".my-shopcart-btn").click(function(){
          // alert('我的购物车');

      });


    });
</script>

</html>