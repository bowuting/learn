<?php
define("DIR",__DIR__);

function run(){
	$action = empty($_GET['action'])? "index" : $_GET['action'];
	$action_file = DIR .'/action/'. ucfirst($action) ."Action.class.php";
	//echo $action_file;
	if(!file_exists($action_file)){
		echo "action error";die;
	}
	require_once $action_file;
	$action_class = new $action;
	$action_class->action();
}

run();
