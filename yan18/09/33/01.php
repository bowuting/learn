<?php

//1 创建DOM解析对象
$dom = new DOMdocument('1.0','utf-8');
// print_r($dom);  // DOMDocument Object

//2 : 载入XML文档

$dom->load('./01.xml');

//3 得到title节点列表
// 分析  title节点有很多  因此得到的是 节点列表对象
$ts = $dom->getElementsByTagName('title');
// print_r($ts);//DOMNodeList  两个属性length 代表取得的节点数量
                            // item(N)  代表取得第N个节点


echo "我们得到了" . $ts->length . "本书";
// print_r($ts->item('0')->nodeValue);
//print_r($ts->item('1')); // DOMElement Object

$title0 = $ts->item(0);

// print_r($title0->childNodes); //DOMNodeList Object

$text = $title0->childNodes->item(0);

// print_r($text); //DOMText Object

echo $text->wholeText;



// 连贯操作：
echo $dom->getElementsByTagName('title')->item(1)->childNodes->item(0)->wholeText;
echo "<hr />";
echo $dom->getElementsByTagName('title')->item(1)->nodeValue;



 ?>
