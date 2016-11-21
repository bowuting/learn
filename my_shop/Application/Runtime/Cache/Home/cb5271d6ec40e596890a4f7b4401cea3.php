<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="cn">

    <meta charset="UTF-8">


<link href="//cdn.bootcss.com/semantic-ui/2.2.6/semantic.min.css" rel="stylesheet">
<!-- <link href="//cdn.bootcss.com/layer/2.4/skin/layer.css" rel="stylesheet"> -->


<link rel="stylesheet"	href="//cdn.bowuting.com/nice/dist/jquery.validator.css">


</head>
<body>


<div class="ui container">
    <div class="ui menu">
    <a class="item" href="/github/my_shop/index.php/Home/">
        首页
    </a>
    <a class="item" href="/github/my_shop/index.php/admin/">
        后台
    </a>
    <a class="item" href="/github/my_shop/index.php/Home/Index/gallery/cid/0">
        商品列表
    </a>
    <?php
 if(empty($_SESSION['uid'])){ ?>
        <a class="item" href="/github/my_shop/index.php/Login/Index/registerFirst">
            注册
        </a>
        <a class="item" href="/github/my_shop/index.php/Login/Index/signin">
            登录
        </a>

    <?php  } else { ?>

      
      <a class="item" href="/github/my_shop/index.php/Login/Index/signout">
          登出
      </a>
    <?php  } ?>

    <a  class="item" href="/github/my_shop/index.php/Home/Index/shopcart">我的购物车</a>

    <form class="item" action="/github/my_shop/index.php/Home/Index/gallery/" method="get">
    <div class="ui input">
        <input type="text"  name="keyword" placeholder="Search...">
        <button type="submit" class="ui basic button">商品名搜索</button>
    </div>
    </form>

</div>


    <div class="ui grid">
        <div class="sixteen wide column" >
          <!-- <div ng-app="">
 	          <p>名字 : <input type="text" ng-model="name"></p>
 	          <h1>Hello {{name}}</h1>
          </div> -->
          <form class="" action="index.html" method="post">
              <table class="ui celled table">
                <thead>
                  <tr>
                    <th>
                      <input type="checkbox" class="checkbox-all" data-check="all">  全选

                    </th>
                    <th>名称</th>
                    <th>图片</th>
                    <th>单价</th>
                    <th>数量</th>
                    <th>小计</th>

                  </tr>
                </thead>

                <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                    <td>
                        <input type="checkbox" data-check="<?php echo ($vo["goods_id"]); ?>" class="checkbox">
                    </td>
                    <td>
                      <?php echo ($vo["goods_name"]); ?>
                    </td>
                    <td>
                      <img width="50px" height="50px"src="<?php echo ($vo["goods_pic"]); ?>" alt="" />
                    </td>
                    <td>
                      <p data-onePrice="<?php echo ($vo["goods_id"]); ?>" >
                        <?php echo ($vo['goods_price']/100); ?>
                      </p>
                    </td>
                    <td>
                      <button class="reduce" data-reduce="<?php echo ($vo["goods_id"]); ?>" type="button"  >-</button>

                      <span data-quantity="<?php echo ($vo["goods_id"]); ?>" style="width:30px" type="text" name="num"  > <?php echo ($vo['mycart_quantity']); ?> </span>
                      <button class="add" data-add="<?php echo ($vo["goods_id"]); ?>" type="button"  >+</button>

                    </td>
                    <td>

                      <p data-subtotal="<?php echo ($vo["goods_id"]); ?>" class="price">

                        <?php echo ($vo['goods_price']/100*$vo['mycart_quantity']); ?>
                      </p>
                    </td>
                  </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                <tr>
                  <td colspan="6">
                    <span style="float: right">
                      总价：<span  id="all-price" >0</span>元
                    </span>
                  </td>
                </tr>
              </table>
          </form>
        </div>
    </div>

</div>

</body>

<script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>

<script src="//cdn.bootcss.com/semantic-ui/2.2.6/semantic.min.js"></script>
<script src="//cdn.bootcss.com/layer/2.4/layer.min.js"></script>


<script type="text/javascript" src="//cdn.bowuting.com/nice/dist/jquery.validator.js"></script>
<script type="text/javascript" src="//cdn.bowuting.com/nice/dist/local/zh-CN.js"></script>

<script type="text/javascript">
$(document).ready(function(){


    function sub(con,goodsid){
        // console.log(con);
        // console.log('data-' + con);

        console.log(goodsid);
        var onePrice =  parseInt($('[data-onePrice="'+ goodsid + '"]').text());
        var quantity = parseInt($('[data-quantity="'+ goodsid + '"]').text());
        var Subtotal = 0;

        if (con == 'add') {
            quantity += 1;
        } else {
          if (quantity <= 1) {
            layer.alert('不能再减了~');
            return false;
          }
            quantity -= 1;

        }

        Subtotal = quantity * onePrice;

        $('[data-quantity="'+ goodsid + '"]').text(quantity);
        $('[data-subtotal="'+ goodsid + '"]').text(Subtotal);
    }


      $(".add").click(function(){
        var goodsid = $(this).attr('data-add');
        sub('add',goodsid);

        allPrice();
      });

      $(".reduce").click(function(){
        var goodsid = $(this).attr('data-reduce');
        sub('reduce',goodsid);

       allPrice();
      });


      function allPrice() {

        var allPrice = 0;

        $(".checkbox").each(function () {
          // if ($(this).is(':checked')) {
          //   console.log($(this).attr('data-check'));
          // }
          // return false;
          if($(this).is(':checked')){

              var goodsid = $(this).attr('data-check');
              var subtotalPrice =  parseInt($('[data-subtotal="'+ goodsid + '"]').text());

              allPrice += subtotalPrice;

            }});

          $('#all-price').text(allPrice);
      }

      $(".checkbox-all").click(function(){
        if($(this).is(':checked')){

              var isAll = $(this).attr('data-check');
              if (isAll == 'all') {

                $('input:checkbox').attr("checked",'checked');
                // console.log(isAll);
              }

            }
            allPrice();

        });



        $(".checkbox").click(function(){

             allPrice();

          });






    });

</script>

</html>