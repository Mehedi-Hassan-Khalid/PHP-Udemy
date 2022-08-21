<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
  <h2 align = "center"><u>Switch Case statement:</u></h2><br>

    <?php
    $age = 56;

    switch($age)
    {
        case 12:
            echo "You are 12 years old <br>";
            break;

        case 45:
            echo "You are 45 years old <br>";
            break;

        case 56:
            echo "You are 56 years old boy <br>";
            break;
        
        default:
            echo "Your age is weird <br>";
            break;
    }
    echo "<hr>"
    ?>


    <?php
    $grade = 'A';
    switch($grade)
    {
        case 'A+' :
            echo '<p Style = "color : yellow"> You are Brillent Student</p>';
            break;

        case 'A' :
            echo '<p Style = "color : orange"> You are Very Good Student</p>';
            break;
            
        case 'A-' :
            echo '<p Style = "color : pink"> You are Good Student</p>';
            break;

        case 'F' :
            echo '<p Style = "color : brown"> You are Failed</p>';
            break;
    }


    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>