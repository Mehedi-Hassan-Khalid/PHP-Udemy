<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>String and Manipulation Function</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h2 align = "center"><u>String and Manipulation Function:</u></h2><br>
    <?php 
      //String Input
      $name = "Mehedi is a good boy";
      $age = "he is a 24 years old";


      echo $name . " and " . $age;
      echo "<br> <hr>";


      echo "The length of " . "my string is: " . strlen($name). "<br>";
      echo "Total word count of string: " . str_word_count($name). "<br>";
      echo "Reverse of String: " . strrev($name). "<br>";
      echo "Replace string with another: " . str_replace("Mehedi", "Hassan", $name) ."<br>";
      echo "Trim space to the right: "  . rtrim("    This is a good boy     ") . "<br>";
      echo "Trim space to the Leftt: "  . ltrim("    this is a good boy     "). "<br>";
      echo "<hr>";


      //Translation of strings
      echo " Uppercase in First Latter: " . ucfirst($age). "<br>";
      echo " Uppercase in First Latter of each word: " . ucwords($age). "<br>";
      echo " Uppercase of all Latter: " . strtoupper($name). "<br>";
      echo " Lowercase of all Latter: " . strtolower($name). "<br>";
      echo "<hr>";

      echo "Repeat String: " . str_repeat('Mehedi ', 3) . "<br>";
      echo "Repeat String with Uppercase: " . strtoupper(str_repeat($name, 2)) . "<br>";
      echo "Get a Sub-String: " . substr($age, 1, 4) . "<br>";
      echo "Get position of string: " . strpos($name, 'e',) . "<br>";
      echo "Find character 'b': " . strchr($name, 'b',) . "<br>";
      echo "Find character 'e': " . strchr($name, 'e',) . "<br>";

  ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>