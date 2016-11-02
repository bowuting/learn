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


         <blockquote style="background:#5FB878" class="layui-elem-quote layui-quote-nm">
             <fieldset class="layui-elem-field layui-field-title">
              <legend> 第三届科普漫画剧本大赛报名 </legend>
          </fieldset>
        </blockquote>
        <hr>




         <form class="layui-form" action="/tp3/index.php/Home/Index/insert" method="post">

          <div class="layui-form-item">
              <input type="text" name="name" required  lay-verify="required" placeholder="姓名" autocomplete="off" class="layui-input">
          </div>
          <div class="layui-form-item">
              <input type="text" name="stuid" required  lay-verify="required" placeholder="学号" autocomplete="off" class="layui-input">
          </div>
          <div class="layui-form-item">
              <input type="text" name="college" required  lay-verify="required" placeholder="学院" autocomplete="off" class="layui-input">
          </div>
          <div class="layui-form-item">
              <input type="text" id="tel" name="tel" required  lay-verify="required" placeholder="电话" autocomplete="off" class="layui-input" >
              <!-- <input type="text" id="tel" name="tel" required  lay-verify="required" placeholder="电话" autocomplete="off" class="layui-input" onkeyup="if( 11 !== this.value.toString.legth) tip.innerHTML='必须输入数字，且不能有空格。'; else tip.innerHTML='';"><span id="tip"></span> -->

          </div>
          <div class="layui-form-item">
              <input type="email" name="email" required  lay-verify="required" placeholder="邮箱" autocomplete="off" class="layui-input">
          </div>


          <div class="layui-form-item">
            <div class="layui-input-block">
              <button class="layui-btn" id="submit"lay-submit lay-filter="formDemo" >报名</button>
              <button type="reset" class="layui-btn layui-btn-primary" onclick="on();">重置</button>
            </div>
          </div>


      </form>
      <!-- <blockquote style="background:#393D49" class="layui-elem-quote layui-quote-nm">
          <fieldset class="layui-elem-field layui-field-title">
           <legend> 有问题联系： </legend>
       </fieldset>
     </blockquote> -->
      <!-- <a href="" class="">戳我查看自己的报名信息</a> -->


<blockquote class="layui-elem-quote layui-quote-nm">
    <a href="/tp3/index.php/Home/Index/read" class="layui-btn" target="_blank">戳我查看自己的报名信息</a>

</blockquote>

    <blockquote  id="foot"class="layui-elem-quote">有问题联系:18883284586 </blockquote>

     </body>

     </script>
 </html>