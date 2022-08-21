
    <?php 
    $title = "Data Types";
    // Include file
    include 'includes/Header.php' 
    ?>
    <h1><?php echo $title ?> </h1>

    <?php
      /* php data types
      1. String
      2. Integer
      3. Float
      4. Boolean
      5. Object
      6. Array
      7. NULL
      */

      // String - sequence of characters
      echo "String - sequence of characters:<br>";
      $name = "Mehedi";
      $friend = 'Rohan';
      echo "This is $name and his friend $friend";
      echo "<br><hr>";


      // Integer - Non decimal number
      echo "Integer - Non decimal number:<br>";
      $income = 455;
      $debts = -655;
      echo "My income = $income and debets = $debts";
      echo "<br><hr>";


      // Float - Decimal point number
      echo "Float - Decimal point number:<br>";
      $cgpa = 3.80;
      echo "I got Last semester CGPA $cgpa";
      echo "<br><hr>";


      // Boolean - Can be either true or false
      echo "Boolean - Can be either true or false:<br>";
      $x = true;
      $is_friend = false;
      echo var_dump($x);
      echo var_dump($is_friend);
      echo "<br><hr>";


      // Object - Instances of classes
      // Employee is a class ---> mehedi can be one object
      // Array - Used to store multiple values in a single variable
      echo "Array - Used to store multiple values in a single variable:\n";
      $friends = array("rohan", "shubham", "skillf", "Larry");
      echo var_dump($friends);
      echo "<br>";
      echo $friends[0];
      echo "<br>";
      echo $friends[1];
      echo "<br>";
      echo $friends[2];
      echo "<br>";
      echo $friends[3];
      echo "<br><hr>";
      //echo $friends[4]; // will throw an error as the size of array is 4

      // NULL
      echo "Output show is NULL:<br>";
      $name = NULL;
      echo var_dump($name);
  ?>
  <?php
    // Require file
     include 'includes/Footer.php' 
     ?>
