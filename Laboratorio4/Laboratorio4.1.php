<?php
$porcentaje = $_POST['pctj'];

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

?>