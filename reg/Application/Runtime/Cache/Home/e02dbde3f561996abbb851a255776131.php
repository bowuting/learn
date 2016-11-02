<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

         <title>第三届科普漫画剧本大赛报名</title>
         <meta name="renderer" content="webkit">
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="../../../Public/layui/css/layui.css" media="screen" title="no title">
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




        <form class="layui-form" action="/tp3/index.php/Home/Index/find" method="post">

         <div class="layui-form-item">
             <input type="text" name="stuid" required  lay-verify="required" placeholder="学号" autocomplete="off" class="layui-input">
         </div>


         <div class="layui-form-item">
           <div class="layui-input-block">
             <button class="layui-btn" id="submit"lay-submit lay-filter="formDemo" >查询</button>
            </div>
         </div>


     </form>



     <hr>

     <!-- <blockquote style="background:#393D49" class="layui-elem-quote layui-quote-nm">
         <fieldset class="layui-elem-field layui-field-title">
          <legend> 有问题联系： </legend>
      </fieldset>
    </blockquote> -->


   <blockquote  id="foot"class="layui-elem-quote">有问题联系:18883284586 </blockquote>

    </body>

    </script>
</html>