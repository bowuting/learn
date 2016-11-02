<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>添加商品分类</title>

    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link href="//cdn.bootcss.com/layer/2.4/skin/layer.min.css" rel="stylesheet">

  </head>
  <body>
      <form class="" action="/shop/index.php/Admin/Index/addGoodsCat" method="post">
          <table class="table table-bordered">
              <tr>
                  <td>
                      分类名称：
                  </td>
                  <td>
                      <input type="text" name="name" value="">
                  </td>
              </tr>
              <tr>
                  <td>
                      分类：
                  </td>
                  <td>
                      <select class="" name="fid">
                          <option value="0">根节点</option>
                          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["goodscat_id"]); ?>"> <?php echo str_repeat("&nbsp;",$vo['goodscat_fid']+3);?> <?php echo ($vo["goodscat_name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>

                      </select>
                      <!-- <input type="text" name="lev" value=""> -->
                  </td>
              </tr>
              <tr>
                  <td>
                      排序：
                  </td>
                  <td>
                      <input type="text" name="sort" value="">
                  </td>
              </tr>
              <tr>
                  <td colspan="2" class="text-center">
                      <input  type="submit" class="btn btn-primary"  value="提交">
                  </td>
              </tr>
          </table>


      </form>


  </body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js"></script>


  <script src="//cdn.bootcss.com/layer/2.4/layer.js"></script>


</html>