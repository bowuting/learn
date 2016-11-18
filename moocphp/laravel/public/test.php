<?php
/**
 * Created by PhpStorm.
 * User: bowut
 * Date: 2016/11/10
 * Time: 12:23
 */


class person{
    public $name;
    public $age;

    /**
     * @return mixed
     */
    public function say()
    {
        echo $this->name . ' is ' . $this->age;
    }
}

$student = new person();
$student->name = 'bowuting';
$student->age  = 23;

$student->say();
echo '<br >';
$str = serialize($student);
echo $str;

$student = unserialize($str);
var_dump($student);