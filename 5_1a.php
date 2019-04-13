<?php
  echo "<!DOCTYPE html>";
   echo "<head>";
   echo "<meta charset=".'UTF-8'.">";
    //Declaration of variables 
    $num1 = 41;
    $num2 = 2.1;
    echo "</head>";

    echo "<body>";
      echo "<div>";          
        echo "Esto es el resultado de la suma :" . ($num1 + $num2) . "</br>";
        echo "Esto es el resultado de la resta :" . ($num1 - $num2) . "</br>";
        echo "Esto es el resultado de la multiplicación :" . ($num1 * $num2) . "</br>";
        echo "Esto es el resultado de la division :" . ($num1 / $num2) . "</br>"; 
        echo "Esto es el resto de la division :" . ($num1 % $num2) . "<br>";
      echo "</div>";
  echo "</body>";
echo "</html>";