
<?php
  echo 'Example of Abstract class<br>';
// Abstract class
abstract class Base {
    // This is abstract function
    abstract function printdata();
}
class Derived extends base {
    function printdata() {
        echo "Derived class<br>";
    }
}
  
      
$b1 = new Derived;
$b1->printdata();


 echo '<br><br>Example of  class<br>';

//Class

class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " . $apple->get_color();





?>