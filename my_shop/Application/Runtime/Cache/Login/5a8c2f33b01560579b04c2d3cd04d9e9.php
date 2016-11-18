<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="cn">

    <meta charset="UTF-8">


<link href="//cdn.bootcss.com/semantic-ui/2.2.6/semantic.css" rel="stylesheet">
<link href="//cdn.bootcss.com/layer/2.4/skin/layer.css" rel="stylesheet">


<link rel="stylesheet"	href="/my_shop/Public/using/validator/jquery.validator.css">


</head>
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
    <a class="item" href="/my_shop/index.php/Login/Index/registerFirst">
        注册
    </a>
    <form class="item" action="/my_shop/index.php/Home/Index/gallery/" method="get">
    <div class="ui input">
        <input type="text"  name="keyword" placeholder="Search...">
        <button type="submit" class="ui basic button">商品名搜索</button>
    </div>
    </form>

</div>

    <div class="ui grid">
        <div class="sixteenth wide column">
            <form class="" action="/my_shop/index.php/Login/Index/registerLast" method="post">
                <div class="ui input">
                    手机号码：
                    <input type="text" name="phone"  disabled="disabled" value="<?php echo ($data["phone"]); ?>">
                </div>
                <p>

                </p>
                <div class="ui input">
                    短信验证码：
                    <input type="text" name="phone_verify" placeholder="验证码"  >
                </div>
                <p>
                    
                </p>

                <input class="ui primary button" type="submit"  value="提交"  >
            </form>
        </div>

    </div>

</div>

</body>

<script src="//cdn.bootcss.com/jquery/3.1.1/jquery.min.js"></script>

<script src="//cdn.bootcss.com/semantic-ui/2.2.6/semantic.js"></script>
<script src="//cdn.bootcss.com/layer/2.4/layer.js"></script>



<script type="text/javascript" src="/my_shop/Public/using/validator/jquery.validator.js"></script>
<script type="text/javascript" src="/my_shop/Public/using/validator/local/zh-CN.js"></script>



</html>