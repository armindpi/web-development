<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="form.php" method="post">
    "Name: <input type="text" name><br>
    E-mail: <input type="text" name="email"><br>
    Website: <input type="text" name="website"><br>
    Comment: <input type="text" name="comment"><br> 
     <input type="submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){


        if(empty($_POST["name"])){ 
            echo "Name field is empty";

        }else{
     
        echo $_POST["name"];
    }
}
        if(empty($_POST["email"])){ 
          echo "Name field is empty";

        }else{

       echo $_POST["email"];

}
          if(empty($_POST["website"])){ 
            echo "Name field is empty";

         }else{

     echo $_POST["website"];

}
          if(empty($_POST["comment"])){ 
          echo "Name field is empty";

         }else{

          echo $_POST["comment"];

}




    ?>

</body>
</html>