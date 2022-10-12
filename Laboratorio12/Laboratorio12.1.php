<?php
    session_start();
?>
<html XMLNS="http://www.w3.org/1999/xhtml" xml:lang="es" LANG="es">
    <head>
        <title>Laboratorio 12</title>
        <link REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
    </head>
    <body>
        <hi>Manejo de sesiones</hi>
        <h2>Paso 1: se crea la variable de sesion y se almacena</h2>
        <?php
        $var = "Ejemplo Sesiones";
        $_SESSION['var'] = $var;
        print("<P>Valor de la variable de sesion: $var</P>\n");
        ?>
        <A HREF="Laboratorio12.2.php">Paso 2</A>
    </body>
</html>