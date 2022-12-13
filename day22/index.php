<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
//variable
/*
multi line comment
*/
$color = "red";
echo $color ."<br>";
$txt = "text";
echo "this is $txt" . "<br>";

$txt2 = "this is text two,";
echo "this is text one,". $txt2 ."this is text three". "<br>";


//variable addition
$x = 5;
$y = 10;
echo $x + $y . "<br>" ;


//array
$cars = array("BMN", "VOLVO", "TOYOTA");
var_dump($cars);

// class
class car {
    public $model = "MERCEDES BENSE";
    public $color ="BLACK";

    public function getcarInformation(){
        return "model : " . $this->model ."color : ". $this->color;

    }
    


}
$car1 = new car();

echo $car1->getCarInformation();
 


?>

</body>
</html>
                                                                                                                                                                                                                                                                                                                                                                                