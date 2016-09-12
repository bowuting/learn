
<?php  
session_start();

/**
* 
*/
class Dog 
{
	public $leg = 4;

}

$_SESSION['user'] = 'bowu';
$_SESSION['sch'] = 'pku';


$_SESSION['or'] = array('中','华');


echo "ok";


$dog = new Dog();
$_SESSION['dog'] = $dog;

?>