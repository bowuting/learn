<?php
//phpinfo();

$m = new Memcached();

$ip =  array(
            array('127.0.0.1',11211)
          );

$m->addServers($ip);

//print_r($m->getVersion());

// $m->add('mkey','mvalue',6000);
// $m->add('mkey','mvalue2',6000); //两次add不会覆盖前面的值  replace则会替换前面的赋值
// echo $m->get('mkey');
// echo "<hr>";
// $m->replace('mkey','mvalue2',6000);
// echo $m->get('mkey');

//set方法可以替换add和replace
// $m->set('mkey','mv',1000);
//
// echo $m->get('mkey');
// $m->delete('mkey');
// echo "<hr>";
// echo $m->get('mkey');
//
//
// //$m->set('num',5);
//
// $m->increment('num',1); //数据每次加1
// $m->decrement('num',2); //数据每次减2
// echo $m->get('num');

$data = array('key1'=>'value1','key2'=>'value2','key3'=>'value3');
$m->setMulti($data,0); //多条添加
echo $m->getResultCode();
echo $m->getResultMessage();
print_r($m->getMulti(array('key1','key2','key3')));  //多条获取

$m->deleteMulti(array('key1','key2'));        //多条删除
print_r($m->getMulti(array('key1','key2','key3')));  //多条获取






 ?>
