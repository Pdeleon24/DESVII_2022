<?php
$arreglo = $_POST['arreglo'];
$mayor = 0;
$pos = 0;
for($i=0; $i<count($arreglo); $i++)
{
    if($arreglo[$i] > $mayor)
    {
        $mayor = $arreglo[$i];
        $pos = $i + 1;
    }
}
echo "El mayor elemento se encuentra en la posición: ". $pos ." y su valor es de: ". $mayor;
?>