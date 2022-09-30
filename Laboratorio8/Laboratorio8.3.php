<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 8.3</title>
</head>
<body>
    <form action = "Laboratorio8.3.php" method= "post" >
        Ingrese el tamaño de la matriz N por N: 
        <input type = "text" name = "tamaño">
        <br></br>
        <input type = "submit" name = "enviar" value = "Enviar">
    </form>

    <?php
    include ("class_lib.php");
    $sacar_diagonal = new diagonal();
    $sacar_diagonal -> sacardiagonal($_POST['tamaño']);
?>

</body>
</html>