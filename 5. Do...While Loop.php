<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Do....While Loop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h2 align = "center"><u>Do....While Loop:</u></h2><br>

    
    <?php
        /*
        do {
            some lines of code to be executed here;
            ...
        } while(condition);
        */
        $i = 0;
        do
        {
            echo "$i <br>";
            $i++;
        }while($i<5);
        echo "<hr>"
    ?>


    <?php
    
        $height = 5;
        do
        {
            echo "You are so Tall. Because, Your height is $height<br>";
            $height++;
        }while($height<8)

    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>