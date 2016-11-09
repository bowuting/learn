<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <form class="" action="/index.php/Home/Form/insert" method="post">
            标题： <input type="text" name="title" value=""><br/>
            内容： <textarea name="content" rows="8" cols="40"></textarea><br/>
                  <input type="submit" name="name" value="提交">
        </form>
    </body>
</html>