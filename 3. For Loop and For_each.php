<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>For Loop and For_each</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h2 align = "center">For Loop and For_each:</h2><br>
    <?php

        for ($index=1; $index < 6; $index++) 
        { 
            // for(initialization;condition; updation)
            echo "The number is $index <br>";
        }
        echo "<hr>";
    ?>




    <?php

        // Avoid running into infinite loops
        for ($i=0; $i < 33; $i=$i+4) 
        { 
            echo $i . "<br>";
        }

        echo "For loop has ended";
        echo "<hr>";
    ?>


    <?php
    
        $arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");

        for ($i=0; $i < count($arr); $i++) 
        { 
            echo "<ul>";
            echo "<li>$arr[$i]<br></li>";
            echo "</ul>";
        }
        echo "<br><hr>";

    ?>



    <?php
        // Better way to do this - foreach loops
        $arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");
        echo "<ol>";
        foreach ($arr as  $value) 
        {
            echo "<li>$value</li><br>"; 
        }
        echo "</ol>";
    
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>