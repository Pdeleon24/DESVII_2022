<html lang="es">
    <head>
        <title>Laboratorio 13</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <h1>Eliminar Cookies</h1>
        <?php
        if(isset($_COOKIE["user"])){
            setcookie("user","",time()+60*5);
            echo "<h3> La cookie 'user' ha sido eliminada sastifactoriamente</h3><br/>";
        }
        else{
            echo "<h3> La cookie 'user' no existe</h3><br/>";
        }
        if(isset($_COOKIE["contador"])){
            setcookie("contador","",time()+365*24*60*60);
            echo "<h3> La cookie 'contador' ha sido eliminada sastifactoriamente</h3><br/>";
        }
        else{
            echo "<h3>La cookie 'contador' no existe</h3><br/>";
        }
        ?>
        <A href="Laboratorio13.1.php">Volver al contador de visitas</A>&nbsp;
        <A href="Laboratorio13.2.php">Volver al saludo a usuario</A>
    </body>
</html>