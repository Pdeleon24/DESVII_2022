<?php
    session_start();
?>
<html LANG="es">
    <head>
        <title>Laboratorio 12</title>
        <link REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
    </head>
    <body>
        <hi>Manejo de sesiones</hi>
        <h2>Paso 3: la variable ya ha sido destruida y su valor se ha perdido</h2>
        <?php
            if(isset($_SESSION['var'])){
                $var = $_SESSION['var'];
            }
            else {
                $var = "";
            }
            print ("<P>Valor de la variable de sesion: $var</P\n");
            session_destroy();
        ?>
        <A HREF="Laboratorio12.1.php">Volver al paso 1</A>
    </body>
</html>