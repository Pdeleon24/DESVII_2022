<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.2</title>
</head>
<body>
    <form name="formularioFactorial" method="post" action="Laboratorio8.2.php">
        <p> CALCULO DE UN FACTORIAL DE ACUERDO A UN VALOR DE ENTRADA</p>
        <br/>
        Introduzca el factorial a calcular: 
        <input type="text" name="factorial" value="">
        <br/> <br/>
        <input value="Calcular" type="submit">
    </form>

    <?php
    include ("class_lib.php");
    $sacar_factorial = new factorial();
    $sacar_factorial -> sacarfactorial($_POST['factorial']);
 
?>

</body>
</html>
