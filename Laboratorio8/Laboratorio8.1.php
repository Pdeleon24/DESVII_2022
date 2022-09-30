<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.1</title>
</head>
<body>
    <form name="formularioImg" method="post" action="Laboratorio8.1.php">
        <P> APLICACIÓN WEB CON IMAGEN DINÁMICA</P>
        <br/>
        Introduzca el porcentaje de las ventas: <input type="text" name="porcentaje" value="">
        <br/> <br/>
        <input value="Calcular" type="submit" />
    </form>

    <?php
    
    include ("class_lib.php");

    $sacar_porcentaje = new ventas();
    $sacar_porcentaje -> sacarporcentaje($_POST['porcentaje']);

?>

</body>
</html>