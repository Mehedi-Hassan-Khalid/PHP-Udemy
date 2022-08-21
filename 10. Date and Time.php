<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Date and Time</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h2 align = "center"><u>Date and Time:</u></h2><br>

    <?php
     // Prints something like: Monday 8th of August 2005 03:12:46 PM
     $datenow = getdate();
     echo "Today's Day: " . $datenow['mday'] . "<br>";
     echo "Today's Month: " . $datenow['mon'] . "<br>";
     echo "Today's year: " . $datenow['year'] . "<br>"; 
     echo "Today's Date: " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'] ."<br>";
     echo time();
     echo "<hr>";

    
     $d1 = date('l jS \of F Y h:i:s A');
     echo "Todays dateTime is:  $d1 <br>";
     echo "<hr>";

     


    // Quiz:- Post at least 3 example of dates in php

    echo "Welcome to the world of DateTime: <br>";
    $Date1 = date('dS F, o');
    echo "1. Today Date is : $Date1 <br>";

    $Date2 = date('h:i:s A');
    echo "2. Now Time is : $Date2 <br>";

    $Date3 = date('h:i:s A, l, d-m-o ');
    echo "3. Now TimeDayDate is : $Date3 <br>";

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>