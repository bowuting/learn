<?php


<<<<<<< HEAD
/**
*
*/
class Light
{
	public function ons(Glass $g){
		$g->display();
	}

}
/**
 *
 */
class Glass
{
public function display(){

	}
}


class RedGlass extends Glass{
	public function display()
	{
		echo "红光照耀<br />";
	}
}

class BlueGlass extends Glass{
	public function display()
	{
		echo "蓝光照耀<br />";
	}
}

/**
 *
 */
class Pig
{

	public function display()
	{
		echo "朱磊<br />";
	}
}


$l = new Light();
$r = new RedGlass();
$b = new BlueGlass();
$pig = new Pig();
$l->ons($r);
$l->ons($b);
$l->ons($pig);
=======
  echo "<p style="."color:red".">test<p/>";
>>>>>>> a762564cc2e3cd92f26aa0a326fd356d1b349a27



 ?>
