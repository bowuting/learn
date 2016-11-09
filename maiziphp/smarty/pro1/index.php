<?php
 /**
 * Example Application

 * @package Example-application
 */

require('../libs/Smarty.class.php');

$smarty = new Smarty;
//$smarty->testInstall();
$smarty->template_dir = 'templates';
$smarty->compile_dir  = 'templates_dir';
$smarty->config_dir = 'configs';
$smarty->cache_dir = 'cache';

$smarty->assign('username','bowuting');

$smarty->display('index.html');


?>
