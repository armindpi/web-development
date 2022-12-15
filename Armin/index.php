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
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
//associative array
$student = array("Sohana" => 500, "Armin" => 700, "Ruma" => 400, "Amena" => 600, "sharmin" =>900);
//echo $student[4];
 foreach($student as $name => $tk){
     echo $name ." : ". $tk;
     echo "<br>";
 }
 //function
 function sum($x, $y){
    return $x + $y;
 }

 $v = sum(4,5);
 echo $v . "<br>";

 $v2 = sum(10 , 20);
 echo $v2 . "<br>";

 //function simple
 function simple($x, $y){
     $Z=$x*$x+3*$x+9*$y+6*($y*$y)+32*$x+7*($y*$y*$y);
    return $Z;
}
echo simple(2, 5);
$val = simple(3, 6);
echo  "<br>" . $val;

//indexed array
$cars = array("Volvo", "Bmw", "Toyota");
$ArrLength = count($cars);
for($x =0; $x < $ArrLength; $x++){
    echo $cars[$x];
    echo "<br>";

}


?>
</body>
</html>