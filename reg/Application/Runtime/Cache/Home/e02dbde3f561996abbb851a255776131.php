<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">

         <title>第三届科普漫画剧本大赛报名</title>
         <meta name="renderer" content="webkit">
         <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link rel="stylesheet" href="../../../Public/layui/css/layui.css" media="screen" title="no title">
        <!-- <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css"> -->
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




        <form class="layui-form" action="" method="post">

         <div class="layui-form-item">
             <input type="text" name="stuid" required  lay-verify="required"  autocomplete="off" placeholder="请输入10位学号"class="layui-input" onkeyup="showHint(this.value)">
         </div>


         <div class="layui-form-item">
           <div class="layui-input-block">
             <!-- <button class="layui-btn" id="submit"lay-submit lay-filter="formDemo" >查询</button> -->
            </div>
         </div>


     </form>

     <table class="layui-table">
         <tr>
             <td>
                 姓名
             </td>
             <td id="name">

             </td>
         </tr>

         <tr>
             <td>
                 学号
             </td>
             <td id="stuid">

             </td>
         </tr>
         <tr>
             <td>
                 学院
             </td>
             <td id="college">

             </td>
         </tr>
         <tr>
             <td>
                 电话
             </td>
             <td id="tel">

             </td>
         </tr>
         <tr>
             <td>
                 邮箱
             </td>
             <td id="email">

             </td>
         </tr>
         <tr>
             <td>
                 报名时间
             </td>
             <td id="create_time">

             </td>
         </tr>

     </table>




     <hr>

     <!-- <blockquote style="background:#393D49" class="layui-elem-quote layui-quote-nm">
         <fieldset class="layui-elem-field layui-field-title">
          <legend> 有问题联系： </legend>
      </fieldset>
    </blockquote> -->


   <blockquote  id="foot"class="layui-elem-quote">如果有错误 请将正确信息发送至 bowuting@qq.com   主题:报名信息修改  谢谢</blockquote>

    </body>

    <script type="text/javascript">
      function showHint(str){
        // console.log(str);
        // console.log(str.length);
        if (str.length == 10) {
          xmlhttp=new XMLHttpRequest();
          xmlhttp.open("POST","/github/www/reg/index.php/Home/Index/find",true);
          xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
          xmlhttp.send("stuid="+str);
          xmlhttp.onreadystatechange=function()
            {
              if (xmlhttp.readyState==4 && xmlhttp.status==200)
              {
                // console.log(xmlhttp.responseText);
                 var str = JSON.parse(xmlhttp.responseText);
                //  console.log(str.name);
                 document.getElementById("name").innerHTML=str.name;
                 document.getElementById("stuid").innerHTML=str.stuid;
                 document.getElementById("college").innerHTML=str.college;
                 document.getElementById("tel").innerHTML=str.tel;
                 document.getElementById("email").innerHTML=str.email;
                 var date = new Date(str.create_time * 1000);
                  Y = date.getFullYear() + '-';
                  M = (date.getMonth()+1 < 10 ? '0'+(date.getMonth()+1) : date.getMonth()+1) + '-';
                  D = date.getDate() + ' ';

                  console.log(Y+M+D); 
                 document.getElementById("create_time").innerHTML=Y+M+D;
              }
            }
        }


      }
    </script>


</html>