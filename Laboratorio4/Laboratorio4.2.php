<?php
$factorial = $_POST['factorial'];
$result = 1;
while ($factorial != 0)
{
    $result = $result * $factorial;
    $factorial = $factorial -1;
}
echo"El valor del factorial es: ". $result;
?>