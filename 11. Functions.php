<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Functions</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h2 align = "center"><u>Functions:</u></h2><br>
    

    <?php
      // function with no argument
      function writemessage() //Definig a function
      {
        echo "You are a really nice person, Have a nice day!";
      }
      writemessage(); //Calling a function
      echo "<hr>";
    ?>






    <?PHP
      // function with argument(parametars)
      function AddNumbers($num1, $num2) 
      {
        $sum =  $num1 + $num2;
        echo "The sum of $num1 and $num2 is: $sum <br>";
      }
      AddNumbers(5, 20);
      /*Another way:
      function AddNumbers(int $num1, int $num2) 
      {
        return $num1 + $num2;
      }
      echo "The sum of is: " . AddNumbers(5, 20) . "<br>";
      */
      $num3 = 400;
      AddNumbers(5, $num3);
      AddNumbers('50', "200");


      function changenum(&$num3)
      {
        $num3 = $num3 + 20;
      }
      changenum($num3);
      echo "Changing number-03 is: " . $num3 . "<br>";
      echo "<hr>";
    ?>




  
    <?php
      /*
      Function receiving argument

      function functionName(argument(s)) {
        code to be executed;
      }
      */
      function add_some_extra($string)
      {
          $string .= 'Add something.';
      }

      $str = 'I have added this';
      add_some_extra($str);

      echo $str . "<br>";   
      // outputs ‘Add something. I have added this'
      echo "<hr>";
    ?>



    <?php
      function SumMarks($MarksArr)
      {
          $sum = 0;
          foreach ($MarksArr as $value) {
              $sum += $value;
          }
          return $sum;
      }

      $Mehedi = [99, 98, 93, 94, 17, 100];
      $SumMarksMehedi = SumMarks($Mehedi);
      echo "Total marks scored by Harry out of 600 is $SumMarksMehedi". "<br>";



      function AvgMarks($MarksArr)
      {
          $sum=0;
          $n=1;
          foreach ($MarksArr as $value) 
          {
              $sum = $sum + $value;
              $n++;
          }
          return $sum/$n;
      }
      $Hassan = [89, 56, 78, 23, 99, 39];
      $AvgMarksHaasan = AvgMarks($Hassan);
      echo "Avarger marks scored by Hassan out of 600 is $AvgMarksHaasan". "<br>";



      function MulMarks($MarksArr)
      {
          $mul=1;
          foreach ($MarksArr as $value) 
          {
              $mul = $mul * $value;
          }
          return $mul;
      }
      $Khalid = [2, 4, 6, 8];
      $MulMarksKhalid = MulMarks($Khalid);
      echo "Multiple marks scored by Khalid out of 400 is $MulMarksKhalid". "<br>";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>