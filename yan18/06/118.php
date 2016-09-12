<?php

header('Content-type:text/html;charset=utf-8');

<<<<<<< HEAD
class Human{
	private $wife = '小甜甜';
	public function tell(){
		echo $this->wife,'<br />';
	}
	public function cry(){
		echo '555','<br />';
	}

}
/**
*
*/
class Stu extends Human
{
	private $wife= 'fengjie';
	public function sebtell(){
		echo $this->wife,'<br />';
	}

}

$stu = new Stu();
print_r($stu);

  /**
   *
   */
  class Human
  {

    private $wife = '小甜甜';

    public $age = 22;
    public function cry(){
      echo "55555<br />";
    }
    public function pshow(){
      echo $this->wife;
    }
  }

/**
 *
 */
class Stu extends Human
{
  private $wife = '奶茶妹';

  public $height = 180;



  public function sshow(){
    echo $this->wife;

    echo "<br />";
    parent::pshow();
    echo "<br />";
  }
}


$lisi = new Stu();
print_r($lisi);
$lisi->sshow();
>>>>>>> 9f849b4fd8cdda6f260c69b902a0270cb0a535c8




<<<<<<< HEAD
?>
=======
 ?>
>>>>>>> 9f849b4fd8cdda6f260c69b902a0270cb0a535c8
