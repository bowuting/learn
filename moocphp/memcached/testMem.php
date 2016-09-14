<?php

require_once 'memcached.class.php';
$server = array(
          array('127.0.0.1',11211),
        );

$m = new Mem();

$m->addServer($server);
$m->s('key','value',1800);
echo $m->s('key');
$m->s('key',NULL);
echo $m->s('key');






 ?>
