<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //arithematic operators
    $x=10;
    $y=30;

    echo $x+$y."<br>";
     echo $x-$y."<br>";
     echo $x*$y."<br>";
     echo $x/$y."<br>";
    echo $x%$y."<br>";
    echo $x**$y."<br>";


    //logical operators

    $x=10;
    $y=3;

    if($x>5 && $y<5){
        echo "bouth conditions are true <br>"; // logical AND 
    }

    if($x>5 || $y<2){  // logical OR
        echo "Atleast one condition will be true <br>";
    }

    if(!($x>15)){
        echo "This condtion is False <br>";
    }

    // Incremebnt and Decrement operators//

    $a=10;

    echo ++ $a."<br>";
    echo $a++."<br>";

    echo --$a."<br>";
    echo $a--."<br>";








    ?>
</body>
</html>
