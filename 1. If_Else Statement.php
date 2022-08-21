<?php 
    $title = "If_Else statement:";
    // Include file
    include 'includes/Header.php' 
    ?>
    <h1><?php echo $title ?> </h1>

    <?php
    //For example, we have two variables $a = 65; and $b = 9;
    $a = 665;
    $b = 9;

    If($a > 78)
    {
        Echo "a is greater than 78";
    }
    Else
    {
        Echo "a is not greater than 78";
    }
    echo "<hr>";



    /*
    Text color style:
                '<p style = "color: green"> Text </p>';
    */
    $age = 24;
    if ($age>18)
    {
            Echo '<p style = "color: green"> you can drink water with tea and alcohol</p>';
    }
    elseif($age>13)
    {
        Echo '<p style = "color: red"> you can drink tea only with water. No alcohol for you</p>';
    }
    else
    {
        Echo '<p style = "color: blue"> you can drink water only</p>';
    }
    echo "<hr>";
    ?>




    <?php
    /*
    Quiz:
    1. Create an if else ladder using more than one elseif 
    2. Write a program to allow a driver to drive only when his age is greater than or equal to 25 and less than or equal to 65
    */

    $Age = 45;
    if($Age>=25)
    {
        echo '<p style = "color: red"> You can Drive</p>';
    }
    elseif($Age<=65)
    {
        echo '<p style = "color: black"> You can Drive</p>';
    }
    else
    {
        echo '<p style = "color : blue"> You cannot Drive</p>';
    }
    ?>


<?php
    // Require file
    include 'includes/Footer.php' 
    ?>