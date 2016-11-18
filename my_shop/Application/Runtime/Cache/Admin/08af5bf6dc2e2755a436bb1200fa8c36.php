<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
  <head>

    <title>添加商品分类</title>

    <meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Bootstrap -->
<link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<link href="//cdn.bootcss.com/layer/2.4/skin/layer.css" rel="stylesheet">


  </head>
  <body>
      <form class="" action="/github/my_shop/index.php/Admin/Index/createGoodsCatAction" method="post">
          <table class="table table-bordered">
              <tr>
                  <td>
                      分类名称：
                  </td>
                  <td>
                      <input type="text" name="name" id="name" value="">
                  </td>
              </tr>
              <tr>
                  <td>
                      上级分类：
                  </td>
                  <td>
                      <select name="pid" >
                          <option value="0">顶级分类</option>
                          <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!-- 如果是二级分类 则不能在二级分类下添加分类 -->
                              <option value="<?php echo ($vo["goodscat_id"]); ?>"<?php if($vo["lev"] == 2): ?>disabled="disabled"<?php endif; ?>>
                                  <?php if($vo["lev"] == 1): ?>|--<?php echo ($vo["goodscat_name"]); ?>
                                      <?php elseif($vo["lev"] == 2): ?>
                                      &nbsp;&nbsp;&nbsp;&nbsp; |--<?php echo ($vo["goodscat_name"]); endif; ?>
                              </option><?php endforeach; endif; else: echo "" ;endif; ?>
                      </select>
                      <!-- <input type="text" name="lev" value=""> -->
                  </td>
              </tr>
              <tr>
                  <td>
                      排序：
                  </td>
                  <td>
                      <input type="text" name="sort" id="sort" value="">
                  </td>
              </tr>
              <tr>
                  <td colspan="2" class="text-center">
                      <input  type="submit" class="btn btn-primary"  value="提交">
                      <button type="button"  class="btn btn-primary create_action_btn" name="button">ajax提交</button>
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


  <script type="text/javascript">

  $(document).ready(function(){

    $(".create_action_btn").click(function(){
    $.post("/github/my_shop/index.php/Admin/Index/createGoodsCatAction",
      {
        name:$("#name").val(),
        sort:$("#sort").val(),
        pid:$("select").val()
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
      });

    });  // ready(function(){ 结束


  </script>


</html>