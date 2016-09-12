 <?php

header('Content-type:text/html;charset=utf-8');
error_reporting(E_ALL);
  class Human
  {
    public $name = 'lisi';

    public function who(){
      echo $this->name;
    }

  }

  $a = new Human;
  $a->who();
  $a->test();

?>
