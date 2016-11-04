<?php if (!defined('THINK_PATH')) exit();?> <!DOCTYPE html>
 <html>
     <head>
         <meta charset="utf-8">

          <title>第三届科普漫画剧本大赛报名</title>
          <meta name="renderer" content="webkit">
          <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
          <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
         <link rel="stylesheet" href="./Public/layui/css/layui.css" media="screen" title="no title">
         <style media="screen">
             #foot{
                 background-color: #393D49;
                 font-size: 20px;
                 color: white;
             }
         </style>
     </head>

     <body style="background-color:#fbfbfb">
       <hr>
     <blockquote style="background:#5FB878" class="layui-elem-quote layui-quote-nm">
             <fieldset class="layui-elem-field layui-field-title">
              <legend> 第三届科普漫画剧本大赛报名 </legend>
          </fieldset>
        </blockquote>
        <hr>




         <form class="layui-form" action="/github/www/reg/index.php/Home/Index/insert" method="post">

          <div class="layui-form-item">
              <input type="text" id="name" name="name" required  lay-verify="required" placeholder="姓名" autocomplete="off" class="layui-input">
          </div>
          <div class="layui-form-item">
              <input type="text" id="stuid" name="stuid" required  lay-verify="required" placeholder="学号" autocomplete="off" class="layui-input">
          </div>
          <div class="layui-form-item">
              <input type="text" id="college" name="college" required  lay-verify="required" placeholder="学院" autocomplete="off" class="layui-input">
          </div>
          <div class="layui-form-item">
              <input type="text" id="tel" name="tel" required  lay-verify="required" placeholder="电话" autocomplete="off" class="layui-input" >
          </div>
          <div class="layui-form-item">
              <input type="email" id="email" name="email" required  lay-verify="required" placeholder="邮箱" autocomplete="off" class="layui-input">
          </div>


          <div class="layui-form-item">
            <div class="layui-input-block">
              <!-- <button class="layui-btn" id="submit"lay-submit lay-filter="formDemo" >报名</button> -->
              <button type="button" class="layui-btn" id="submit" name="button">报名</button>
              <button type="reset" class="layui-btn layui-btn-primary">重置</button>
            </div>
          </div>

      </form>



      <blockquote class="layui-elem-quote layui-quote-nm">
        <a href="/github/www/reg/index.php/Home/Index/read" class="layui-btn" >戳我查看自己的报名信息</a>
      </blockquote>

      <blockquote  id="foot"class="layui-elem-quote" >有问题联系:bowuting@qq.com </blockquote>

     </body>
     <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
     <script src="//cdn.bootcss.com/layer/2.4/layer.js"></script>

     <script type="text/javascript">
     $(document).ready(function(){
         $("#submit").click(function(){
          var tel_len = $("#tel").val().toString().length;
          var name_len = $("#name").val().toString().length;
          if (name_len === 0) {
            layer.alert("您还没有填姓名~");
            return;
          }
          if (tel_len !== 11) {
              layer.alert("您的电话号码不是11位！");
              return;
          }
           $.post("/github/www/reg/index.php/Home/Index/insert",
             {
               name:$("#name").val(),
               stuid:$("#stuid").val(),
               college:$("#college").val(),
               tel:$("#tel").val(),
               email:$("#email").val()
             },
             function (ajax) {
               if (ajax.status == 1) {
                 layer.alert("报名成功！");
               } else if (ajax.status == 2) {
                 layer.alert("该学号已经报名 请检查或联系管理员！");
               }
             });
           });

       });
     </script>

 </html>