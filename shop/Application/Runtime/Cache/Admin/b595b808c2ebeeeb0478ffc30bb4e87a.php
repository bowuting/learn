<?php if (!defined('THINK_PATH')) exit();?>

<!DOCTYPE html>
<html lang="zh-cn">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>商品展示</title>

    <link href="//cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- <link href="//cdn.bootcss.com/layer/2.4/skin/layer.min.css" rel="stylesheet"> -->



  </head>
  <body>
      <hr>
      <div class="container">
          <div class="row text-center">
              <div class="col-md-2">

              </div>
              <div class="col-md-8">
                  <table class="table  table-bordered table-hover table-striped">
                      <tr>
                          <td>
                              分类名称
                          </td>
                          <td>
                              排序
                          </td>
                          <td>
                              时间
                          </td>
                          <td>
                              编辑
                          </td>
                          <td>
                              删除
                          </td>
                      </tr>
                      <?php if(is_array($list)): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
                              <td>
                                  <?php echo ($vo["goodscat_name"]); ?>
                              </td>
                              <td>
                                  <?php echo ($vo["goodscat_sort"]); ?>
                              </td>
                              <td>
                                  <?php echo (date("Y-m-d  H-i-s",$vo["goodscat_createtime"])); ?>
                              </td>
                              <td>
                                <!-- 因为有很多个按钮  所以   按钮选择 不能用id  要用class -->
                                  <button type="button" class="btn btn-warning update_btn" id="update_btn"data-id="<?php echo ($vo["goodscat_id"]); ?>"><i class="glyphicon glyphicon-pencil"> 编辑</i></button>
                              </td>
                              <td>
                                <button type="button" class="btn btn-danger delete_btn" id="delete_btn" data-id="<?php echo ($vo["goodscat_id"]); ?>" name="button"><i class="glyphicon glyphicon-remove"> 删除</i></button>
                                  <!-- <a class="btn btn-danger" href="/github/www/shop/index.php/Admin/Index/deleteGoodsCat/id/<?php echo ($vo["goodscat_id"]); ?>"><i class="glyphicon glyphicon-remove"> 删除</i></a> -->
                              </td>
                          </tr><?php endforeach; endif; else: echo "" ;endif; ?>
                  </table>
                  <button type="button" class="btn btn-primary"  id="create"><i class="glyphicon glyphicon-plus"> 新增</i></button>

              </div>
              <div class="col-md-2">

              </div>
          </div>
      </div>


      <hr>


  </body>
  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js"></script>


  <script src="//cdn.bootcss.com/layer/2.4/layer.js"></script>


    <script type="text/javascript">


    $(document).ready(function(){
      $('.delete_btn').click(function(){
        var id = $(this).attr('data-id');
        console.log(id);
      $.get("/github/www/shop/index.php/Admin/Index/deleteGoodsCat/id/" + id,
        function (data) {
          if (data.status == 1) {
            layer.open({
            content: '删除成功'
            ,btn: ['好的']
            ,yes: function(index, layero){
              window.location.reload();
            },cancel: function(){
              //右上角关闭回调
            }
          });
            // window.location.reload();
          }
        });
        });

      $('.update_btn').click(function(){
        var id = $(this).attr('data-id');
        layer.open({
          type: 2,
        //   shade: 0.8,
        skin: 'layui-layer-rim',
          title:'修改商品分类',
          area: ['600px', '360px'],
          shadeClose: true, //点击遮罩关闭
          content: '/github/www/shop/index.php/Admin/Index/updateGoodsCat/id/' + id,
        // content: '/github/www/shop/index.php/Admin/index/createGoodsCat',
        cancel:function() {
            location.reload();
          }
        });
      });



      $('#create').click(function(){
          layer.open({
            type: 2,
          //   shade: 0.8,
          skin: 'layui-layer-rim',
            title:'新增商品分类',
            area: ['600px', '360px'],
            shadeClose: true, //点击遮罩关闭
            content: '/github/www/shop/index.php/Admin/Index/createGoodsCat',
          // content: '/github/www/shop/index.php/Admin/index/createGoodsCat',
          cancel:function() {
              location.reload();
            }
          });
      });
    });



    </script>


</html>