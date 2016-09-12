<?php

require_once 'ActionBase.class.php';
require_once DIR . '/model/IndexModel.class.php';

class index extends ActionBase{
    public $need_login = 1;
    public function action(){
      $this->tpl->assign('name','bowuting');
      $this->tpl->display('index.tpl');
    }
}



 ?>
