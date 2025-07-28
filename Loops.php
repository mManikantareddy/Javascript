<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

   
  // while loop examole
   $i=20; // intialization
   while($i>10){  // condition
    echo "This is while: $i <br>";
    $i--;
   }

   
   // do-while Example
   $i=1;
   do{
    echo " This is manikanta Reddy:$i <br>";  // Body exacuted
    $i++;

   }
   while($i<=10);

  
   // For Example  
   for($a=0; $a<=10; $a++){
    echo "this Is for Example:$a <br>";
   }

   for($k=10; $k<=30; $k++){
    echo " This is Balram Krishna:$k <br>";
   }

   // For each Loop 
     $cars=array("BMW", "Benz","Audi"," RR", "Suzuki");
     foreach($cars as $x){
         echo "This Cars are very High:$x <br>";
    }

     // Break statements
        for($i=1; $i<10; $i++){
            if ($i==5)
            break;
            echo "thsi is Break statement: $i <br>";
        
        }

        // continue statement

        for($i=1; $i<10; $i++){
            if ($i==5)
            continue;
            echo "thsi is continue statement: $i <br>";
        
        }

        // Nested Loop
        // Table pogram
        for($i=1;$i<=5;$i++){                //(Outer Loop)
            for($j=1;$j<10;$j++){           // (Inner Loop)
            echo $i."x".$j."=".($i*$j)."<br>";
            }
            echo "<br>";
        }

        // another example
        $rows=5; 
        for($i=1; $i<=$rows; $i++){
            for($j=1;$j<=$i;$j++){
                echo "mani ";
            }
            echo "<br>";
        }

        

        ?>




    ?>
</body>
</html>
