<?php 


session_start();
unset($_SESSION['user']);   //销毁session
$_SESSION['sch'] = 'dad';   //改变session
 


 ?>
