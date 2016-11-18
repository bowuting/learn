<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="cn">

    <meta charset="UTF-8">


<link href="//cdn.bootcss.com/semantic-ui/2.2.6/semantic.css" rel="stylesheet">
<link href="//cdn.bootcss.com/layer/2.4/skin/layer.css" rel="stylesheet">


<link rel="stylesheet"	href="//cdn.bowuting.com/cdn/nice-validator/dist/jquery.validator.css">


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

        <div class="three wide column">
            <table class="ui basic table">
              <thead>
                <tr>
                  <th> <a href="/my_shop/index.php/Home/Index/gallery/cid/0">全部分类</a></th>
                </tr>
              </thead>
              <tbody>
                 <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                         <td>

                             <?php if($vo["lev"] == 1): ?><a href="/my_shop/index.php/Home/Index/gallery/cid/<?php echo ($vo["goodscat_id"]); ?>">|--<?php echo ($vo["goodscat_name"]); ?></a>
                                 <?php elseif($vo["lev"] == 2): ?>
                                 &nbsp;&nbsp;&nbsp;&nbsp;  <a href="/my_shop/index.php/Home/Index/gallery/cid/<?php echo ($vo["goodscat_id"]); ?>">|--<?php echo ($vo["goodscat_name"]); ?></a><?php endif; ?>


                         </td>
                         </tr><?php endforeach; endif; else: echo "" ;endif; ?>
              </tbody>
            </table>
        </div>

        <div class="thirteen wide column">
            <div class="ui segment">
                <!-- 筛选 -->
                颜色
                <a href="javascript:void(0)" data-color="all">全部</a>
                <a href="javascript:void(0)" data-color="red">红色</a>
                <a href="javascript:void(0)" data-color="white">白色</a>
                <a href="javascript:void(0)" data-color="blue">蓝色</a>

                <br>
                价格
                <a href="javascript:void(0)" data-price="all">全部</a>
                <a href="javascript:void(0)" data-price="3">3000以下</a>
                <a href="javascript:void(0)" data-price="1">3001-6000</a>
                <a href="javascript:void(0)" data-price="2">6000以上</a>

            </div>

            <div class="ui four item menu">
                <a class="item" data-price-2="lowtohigh">价格从低到高</a>
                <a class="item" data-price-2="hightolow">价格从高到低</a>
                <a class="item" data-time="asc">要到期的放在前面</a>
                <a class="item" data-time="desc">要到期的放在后面</a>
            </div>


            <div class="ui link cards">

            <?php if(is_array($goodsList)): $i = 0; $__LIST__ = $goodsList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$goodsvo): $mod = ($i % 2 );++$i;?><div class="card" >
                  <!-- <div class="image"> -->
                  <a href="/my_shop/index.php/Home/Index/goods/goods_id/<?php echo ($goodsvo["goods_id"]); ?>"><img width="260px" height="260px" src="<?php echo ($goodsvo["goods_pic"]); ?>" alt="" /></a>

                  <!-- </div> -->
                  <div class="content">
                    <div class="header"><?php echo ($goodsvo["goods_name"]); ?></div>
                    <div class="description"><?php echo ($goodsvo["goods_desc"]); ?></div>
                  </div>
                  <div class="extra content">
                    <span class="right floated"><?php echo (date("Y-m-d  ",$goodsvo["goods_createtime"])); ?></span>

                    <span><i class="user icon"></i> <?php echo ($goodsvo['goods_price']/100); ?>元</span>
                  </div>
                </div><?php endforeach; endif; else: echo "" ;endif; ?>
            </div>

        </div>
    </div>

</div>

</body>

<script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>

<script src="//cdn.bootcss.com/semantic-ui/2.2.6/semantic.js"></script>
<script src="//cdn.bootcss.com/layer/2.4/layer.js"></script>


<script type="text/javascript" src="//cdn.bowuting.com/cdn/nice-validator/dist/jquery.validator.js"></script>
<script type="text/javascript" src="//cdn.bowuting.com/cdn/nice-validator/dist/local/zh-CN.js"></script>


<script type="text/javascript">
    $(document).ready(function(){

        $("[data-color]").click(function(){
            var newvalue = $(this).attr("data-color");
            var oldvalue = "<?php echo ($_GET['color']); ?>";
            // console.log(newvalue);
            // console.log(oldvalue);
            var reg = new RegExp('/color/' + oldvalue);
            // alert(newvalue);
            if (newvalue == "all") {
                location.href="/my_shop/index.php/Home/Index/gallery/cid/0".replace(reg,"");
            } else {
                if (oldvalue == "") {
                    location.href="/my_shop/index.php/Home/Index/gallery/cid/0"+"/color/"+newvalue;

                } else {
                    location.href="/my_shop/index.php/Home/Index/gallery/cid/0".replace(reg,"/color/"+newvalue);
                }
            }

        });


        $("[data-price]").click(function(){
            var newvalue = $(this).attr("data-price");
            var oldvalue = "<?php echo ($_GET['price']); ?>";
            // console.log(newvalue);
            // console.log(oldvalue);
            var reg = new RegExp('/price/' + oldvalue);
            // alert(newvalue);
            if (newvalue == "all") {
                location.href="/my_shop/index.php/Home/Index/gallery/cid/0".replace(reg,"");
            } else {
                if (oldvalue == "") {
                    location.href="/my_shop/index.php/Home/Index/gallery/cid/0"+"/price/"+newvalue;

                } else {
                    location.href="/my_shop/index.php/Home/Index/gallery/cid/0".replace(reg,"/price/"+newvalue);
                }
            }
        });

        $("[data-price-2]").click(function(){
            var newvalue = $(this).attr("data-price-2");
            var oldvalue = "<?php echo ($_GET['price_2']); ?>";
            // console.log(newvalue);
            // console.log(oldvalue);
            var reg = new RegExp('/price_2/' + oldvalue);
            // alert(newvalue);
                if (oldvalue == "") {
                    location.href="/my_shop/index.php/Home/Index/gallery/cid/0"+"/price_2/"+newvalue;
                } else {
                    location.href="/my_shop/index.php/Home/Index/gallery/cid/0".replace(reg,"/price_2/"+newvalue);
                }
        });

        $("[data-time]").click(function(){
            var newvalue = $(this).attr("data-time");
            var oldvalue = "<?php echo ($_GET['time']); ?>";
            // console.log(newvalue);
            // console.log(oldvalue);
            var reg = new RegExp('/time/' + oldvalue);
            // alert(newvalue);
                if (oldvalue == "") {
                    location.href="/my_shop/index.php/Home/Index/gallery/cid/0"+"/time/"+newvalue;
                } else {
                    location.href="/my_shop/index.php/Home/Index/gallery/cid/0".replace(reg,"/time/"+newvalue);
                }
        });


    });
</script>


</html>