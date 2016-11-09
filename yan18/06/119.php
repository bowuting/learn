<?php
  /**
   *
   */
   header('Content-type:text/html;charset=utf-8');
  class sixty
  {
    protected  $wine = '1斤';
    public function play(){
      echo "谈理想";
    }

  }
  /**
   *
   */
  class nine extends sixty
  {
    public function play()
    {
      echo "游戏",'<br /> ';
    }
    public function qq(){
      echo "妹子 认识一下",'<br />';
    }
    public function showW(){
      echo $this->wine;
    }

  }


  $s9 = new nine();

  //echo $s9->wine,'<br />';
  $s9->play();
  $s9->qq();
  $s9->showW();





 ?>
