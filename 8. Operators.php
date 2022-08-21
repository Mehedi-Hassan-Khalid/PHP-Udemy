<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Operators</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h2 align = "center"><u>String and Manipulation Function:</u></h2><br>


    <?php
        /* Operators in PHP:
                1. Arithmetic Operators
                2. Assignment Operators
                3. Comparison Operators 
                4. Logical Operators
        */

        $a = 45;
        $b = 8;

        // 1. Arithmetic Operators
        echo "Arithmetic Operators:" . "<br>";
        echo "Sum= ". ($a + $b) . "<br>";
        echo "Sub= ". ($a - $b) . "<br>";
        echo "Mul= ". ($a * $b) . "<br>";
        echo "Div= ". ($a / $b) . "<br>";
        echo "Mod ". ($a % $b) . "<br>";
        echo "Ex= ". ($a ** $b) . "<br><Hr>";
        
        // 2. Assignment Operators
        echo "Assignment Operators:" . "<br>";
        $x = $a;
        echo "For x, the value is ". $x . "<br>";

        $b += 6;
        echo "For b, the value is ". $b . "<br>";

        $a -= 6;
        echo "For a, the value is ". $a . "<br>";

        $b *= 6;
        echo "For b, the value is ". $b . "<br>";

        $a /= 5;
        echo "For a, the value is ". $a . "<br>";

        $b %= 5;     // $b = $b % 5
        echo "For b, the value is ". $b . "<br><hr>";


        // 3. Comparison Operators 
        echo "Comparison Operators:" . "<br>";
        $m = 78;
        $n = 78;

        echo "For m > n, the result is: ";
        echo var_dump($m > $n) . "<br>";

        echo "For m > n, the result is: ";
        echo var_dump($m >= $n). "<br>";

        echo "For m < n, the result is: ";
        echo var_dump($m < $n). "<br>";

        echo "For m < n, the result is ";
        echo var_dump($m <= $n). "<br>";

        echo "For m <> n, the result is: "; 
        echo var_dump($m <> $n) . "<br><hr>";


        // 4. Logical Operators

        echo "Logical Operators:" . "<br>";
        $m = true;
        $n = false;
        $p = true;

        echo "For m and n, the result is "; 
        echo var_dump($m and $n). "<br>";

        echo "For m && n, the result is "; 
        echo var_dump($m && $n). "<br>";

        echo "For m or p, the result is "; 
        echo var_dump($m or $p). "<br>";

        echo "For m || p, the result is "; 
        echo var_dump($m || $p). "<br>";

        echo "For !m , the result is "; 
        echo var_dump(!$m). "<br>";

        echo "For !n , the result is "; 
        echo var_dump(!$n). "<br>";

        echo "For !p , the result is "; 
        echo var_dump(!$p). "<br>";


    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>