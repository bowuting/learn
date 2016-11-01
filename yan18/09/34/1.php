<?php




// 创建DOM文档对象
$dom = new DOMDocument('1.0','utf-8');


// 1:创建文本节点
$tl  = $dom->createTextNode('天龙八部');

// 2:创建普通节点
$name = $dom->createElement('name');

// 3:天龙加入到$name节点
$name->appendChild($tl);

// 4:创建CDATA
$cdata = $dom->createCDATASection('天龙八部是好书');

// 5:创建intro节点
$intro = $dom->createElement('intro');

// 6:把cdata加入intro
$intro->appendChild($cdata);


// 7:创建goods
$goods = $dom->createElement('goods');


// 8：把name intro放入goods下
$goods->appendChild($intro);
$goods->appendChild($name);

// 9 创建属性节点goods_id
$goods_id = $dom->createAttribute('goods_id');
$goods_id->value = 'j001';
// 10 把goods_id放入goods
$goods->appendChild($goods_id);

//11 创建appstore节点
$appstore = $dom->createElement('appstore');

//12 把goods节点方法appstore节点
$appstore->appendChild($goods);

// 13 再把appstore加入文档下面
$dom->appendChild($appstore);


// header('Content-type: application/pdf');
header('Content-type: text/xml');


// print_r($dom);
// 输出的：
print_r($dom->saveXML());
//只看到天龙八部四个字，因为浏览器解析成html 就只有这四个字了
//告诉浏览器 以XML的方式解析  即可

$dom->save('01.xml'); //保存起来

 ?>
