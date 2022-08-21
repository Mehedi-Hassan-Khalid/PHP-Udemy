<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Array, Associative and Multi_Dimensional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <h2 align = "center"><u>Array, Associative and Multi_Dimensional:</u></h2><br>


    <?php
        // These are called indexed arrays:
        $arr = array('this', 'that', 'what');
        echo $arr[0] . "<br><hr>";
    ?>

    
    <?php
        // Associative arrays

        /*First create an associative array */
        $student= array("Maths"=>56, "Physics"=>70,  
                        "Chemistry"=>94, "English"=>83,  
                        "Computer"=>58);

        /* Loop through array using foreach */
        echo "Looping using foreach: <br>"; 
        foreach ($student as $subject => $marks){ 
            echo "Student got ".$marks." in ".$subject . "<br>"; 
        }
        echo "<br><br>";



        $favCol = array('shubham' => 'red','rohan'=> 'green',
                            'harry'=> 'brown', 8=>'this' );

        echo $favCol['harry'] . "<br>";
        echo $favCol['rohan'] . "<br>";
        echo $favCol[8] . "<br><br>"; 

        //Another Way:
        foreach ($favCol as $key => $value) 
        {
            echo "Favorite color of $key is $value" . "<br>";
        }
        echo "<hr>"
    ?>



    <?php
        /*Syntax of the 2D array in Php
        array (
            array (elements...),
            array (elements...),
            ...
            )
        */
        $vehicles = array (
                            array("Suzuki",21,12),
                            array("Honda",12,9),
                            array("BMW",22,1),
                            array("Corolla",17,12)
                            );

        echo $vehicles[0][0] . ": In stock: " . $vehicles[0][1] . ", sold: " . $vehicles [0][2] . ".<br>";
        echo $vehicles[1][0] . ": In stock: " . $vehicles[1][1] . ", sold: " . $vehicles [1][2] . ".<br>";
        echo $vehicles[2][0] . ": In stock: " . $vehicles[2][1] . ", sold: " . $vehicles [2][2] . ".<br>";
        echo $vehicles[3][0] . ": In stock: " . $vehicles[3][1] . ", sold: " . $vehicles [3][2] . ".<br>";


        //Another Way:
        for ($i = 0; $i < 4; $i++) 
        {
            echo "<b>Row number $i</b>";
            echo "<ul>";
            for ($j = 0; $j < 3; $j++) 
            {
            echo "<li>".$vehicles[$i][$j]."</li>";
            }
        echo "</ul>";
        }
        echo "<hr>";
    ?>




    <?php
        // Creating a 2 dimensional array
        echo "<br>Two dimensional array: <br>";
        $multiDim = array(array(2,5,7,8),
                        array(1,2,3,1),
                        array(4,5,0,1)
                    );

        for ($i=0; $i < count($multiDim); $i++) 
        { 
            for ($j=0; $j < count($multiDim[$i]); $j++) 
            { 
                echo $multiDim[$i][$j];
                echo " ";
            }
            echo "<br>";
        }
        echo "<hr>";
    ?>





    <?php
        //Quiz: create a 3 dimensional array.
        echo "<br>Three dimensional array: <br>";
        $threeDimArray = array(array(
            array(5, 7, 23),
            array(6, 34, 78),
            array(8, 23, 12)));

            for ($i=0; $i < count($threeDimArray); $i++) 
            { 
                for ($j=0; $j < count($threeDimArray[$i]); $j++) 
                { 
                    for ($k=0; $k < count($threeDimArray[$i][$j]); $k++) 
                    { 
                        echo $threeDimArray[$i][$j][$k];
                        echo " ";
                    }
                    echo "<br>";
                }
            }
            echo "<hr>";
    ?>



    <?php
        //another 3 dimensional array
        $threeDim = array(
            array(
                array('Sadal Aam', 'Pakal Amm', 'Kothiya Aam', 'Sinduriya Aam'),
                array('Pakal kohanda', 'Kach kohanda', 'Gol kohanda', 'Pichakal kohanda'),
            ),
            array(
                array('Sadal angur', 'Bandhiya angur', 'Niman angur', 'Kharab angur'),
                array('Lamhar lauki', 'Chot lauki', 'Golki laudi', 'Jabar wala lauki'),
            ),
            array(
                array('Apple', 'Lal Apple', 'Kasatal Apple', 'Kanch Apple'),
                array('Safedka nenuaa', 'Karika nenuaa', 'Taja nenuaa', 'Basiya nenuaa'),
            ),
        );
        
        foreach($threeDim as $value)
        {
            foreach($value as $value2)
            {
                foreach($value2 as $value3)
                {
        
                    echo "| $value3";
                }
                echo "<br>";
            }
            echo "<br>";
        }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>