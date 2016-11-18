<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>

        <title>首页</title>
        <meta charset="UTF-8">
<title>商品列表</title>

<link href="//cdn.bootcss.com/semantic-ui/2.2.6/semantic.css" rel="stylesheet">

    </head>
    <body>

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
    <form action="/my_shop/index.php/Home/Index/gallery/" method="get">
    <div class="ui input">
        <input type="text"  name="keyword" placeholder="Search...">
        <button type="submit" class="ui basic button">商品名搜索</button>
    </div>
    </form>
</div>


            <div class="ui grid">
                <div class="three wide column">312312</div>
                <div class="eight wide column">312321</div>
            </div>

        </div>

        </body>

    </body>
    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="//cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.js"></script>

<script src="//cdn.bootcss.com/layer/2.4/layer.js"></script>

</html>