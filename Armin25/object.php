<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

   class Fruit{
    public $name;
    public $color;

    function get_fruit_name(){
        return $this->name;

    }
    function set_fruit_name($x){
        $this->name = $x;
        
    }
    function get_fruit_color(){
        return $this->color;

    }
    function set_fruit_color($x){
        $this->color = $x;
        
    }


   }
   $apple = new Fruit();
   $mango = new Fruit();
   $banana = new Fruit();
   $anar = new Fruit();
   $orange = new Fruit();


   $apple->set_fruit_name("Apple");
   $apple->set_fruit_color("Red");

   $mango->set_fruit_name("mango");
   $mango->set_fruit_color("yellow");

   echo $apple->get_fruit_name() ." ";
   echo $apple->get_fruit_color();
   echo "<br>";
   echo $mango->get_fruit_name() ." ";
   echo $mango->get_fruit_color();

   $banana->set_fruit_name("banana");
   $banana->set_fruit_color("Red");

   $orange->set_fruit_name("orange");
   $orange->set_fruit_color("yellow");

   echo $banana->get_fruit_name() ." ";
   echo $banana->get_fruit_color();
   echo "<br>";
   echo $orange->get_fruit_name() ." ";
   echo $orange->get_fruit_color();



   ?>
</body>
</html>