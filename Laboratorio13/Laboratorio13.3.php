<html lang="es">
    <head>
        <title>Laboratorio 13</title>
        <link rel="stylesheet" type="text/css" href="css/estilo.css">
    </head>
    <body>
        <h1>Recuperar valor de una Coockie</h1>
        <?php
        if(isset($_COOKIE["user"]))
        echo "<h2>Bienvenido ".$_COOKIE["user"]."!<h2><br/>";
        else
        echo "<h2>Bienvenido invitado!<h2><br/>";
        ?>
        <A href="Laboratorio13.1.php">...Regresar</A>&nbsp;
        <A href="Laboratorio13.4.php">Continuar...</A>
    </body>
</html>