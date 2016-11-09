  <meta charset="utf-8">
<?php


class Man{
  public $iq = 100;
  public function say(){
    $arr = array('早上好','晚上好','你妹啊');
    if($this->iq >= 100){
      echo $arr[0];
    }
    else {
      $i = rand(1,2);
      echo $arr[$i];
    }
  }
}

/**
 *
 */
class Car
{
  public function hit($people)
  {
    $newiq = rand(50,110);
    $people->iq = $newiq;
  }
}

$lisi = new Man();
$qq = new Car();

$lisi->say();
echo '<br />';

$qq->hit($lisi);

echo $lisi->iq;echo '<br />';
$lisi->say();echo '<br />';
$lisi->say();echo '<br />';
$lisi->say();echo '<br />';
$lisi->say();echo '<br />';

 ?>
