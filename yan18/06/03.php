
    <meta charset="utf-8">

<?php

class People{
  public $name = 'nobody';
  public $height = '30';
  public function cry(){
    echo '呱呱坠地';
  }

}

$a = new People();
print_r($a);

echo $a->name,'<br />',$a->height,'<br />';

$a->cry();


 ?>
