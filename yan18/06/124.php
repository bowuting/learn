<?php

  class A{
    public function foo()
    {
      if (isset($this)) {
        echo '$this is defined';
        echo get_class($this);
        echo "<br />";
      }else {
        echo '$this is not defined<br />';
      }
    }
  }

  class B{
    function bar(){
      A::foo();
    }
  }

  $a = new A();
  $a->foo();
  A::foo();

  $b = new B();
  $b->bar();
  B::bar();
>>>>>>> a762564cc2e3cd92f26aa0a326fd356d1b349a27


 ?>
