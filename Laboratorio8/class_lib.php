<?php
class ventas{
    public function sacarporcentaje($porcentaje){
        if ($porcentaje >= 80)
{
    echo "<img src='Feliz.png'>";
}

if ($porcentaje >= 50 && $porcentaje <= 79)
{
    echo "<img src='Intermedio.png'>";
}

else
{
    echo "<img src='Triste.png'>";
}
    }
}

class factorial{
    public function sacarfactorial($factorial){

        $result = 1;
        while ($factorial != 0)
        {
            $result = $result * $factorial;
            $factorial = $factorial -1;
        }
        echo"El valor del factorial es: ". $result;
    }
}

class diagonal{
    public function sacardiagonal($tamaño){
        for($i=0; $i<$tamaño; $i++){
            for($j=0; $j<$tamaño; $j++){
                if($i == $j){
                    $matriz[$i][$j]=1;
                }
                else{
                    $matriz[$i][$j]=0;
                }
            }
        }
        echo "<table border align>";
		for($i=0; $i<$tamaño; $i++){
			echo "<tr>";
			for ($j=0; $j<$tamaño; $j++) { 
				echo "<td>";  
				echo $matriz[$i][$j];
				echo "</td>";
				}
				echo "</tr>";
			}
    }
}

?>