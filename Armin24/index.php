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

    function fullName($fname, $lname){
        echo $fname ." ". $lname . "<br>";
    }
    fullname("Armin", "Sultana");

    //associative array
    $person = array("jone" => 600, "doe" => 1000, "piter" => 5000);
    echo $person["piter"] . "<br>";  

    //count

    $cars = array("TOYOTA", "BMN", "VOLVO");
    for($x = 0; $x < count($cars); $x++){
        echo $cars[$x] . "<br>";

    }

    // super global
    var_dump($_SERVER). "<br>";
    echo $_SERVER["HTTP_HOST"];
    ?>
    
</body>
</html>