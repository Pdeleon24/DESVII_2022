<?php
    $tamaño = $_POST['tamaño'];
    $random = 0;
    $sum1 = 0;
    $sum2 = 0;

    if ($tamaño%2==1){
        $matriz = array();
        for($i=0; $i<$tamaño; $i++){
            for($j=0; $j<$tamaño; $j++){
                $random = rand(101,200);
                if($j==1){
                    $matriz[$i][$j]=$random;
                    $sum1 = $matriz[$i][$j]+$sum1;
                }

                else if($j==$tamaño-2){
                    $matriz[$i][$j]=$random;
                    $sum2 = $matriz[$i][$j]+$sum2;
                }
                else{
                    $matriz[$i][$j]=0;
                }
                }
            }
            echo "<table>";
            for($i=0; $i<$tamaño; $i++){
                echo "<tr>";
                for ($j=0; $j<$tamaño; $j++) { 
                    echo "<td>";  
                    echo $matriz[$i][$j];
                    echo "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                if($tamaño == 3){
                    echo "La suma de los valores de la columna es de: " . $sum1;
                }
                else{
                echo "La suma de los valores de la segunda columna es de: " . $sum1;
                echo "<br>";
                echo "La suma de los valores de la penultima columna es de: " . $sum2;
                }
        }
   else{
    echo "Favor ingrese un valor impar";
   }
?>