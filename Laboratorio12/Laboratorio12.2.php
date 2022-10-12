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
        <h2>Paso 2: se accede a la variable de sesion almacenada y se destruye</h2>
        <?php
            if(isset($_SESSION['var'])){
                $var = $_SESSION['var'];
                print ("<P>Valor de la variable de sesion: $var</P\n");
                unset ($_SESSION['var']);
                print ("<A HREF='Laboratorio12.3.php'>Paso 3<A>");

            }
            else {
                print ("Sesion no iniciada, ir al <A HREF='Laboratorio12.1'>paso 1</A> para iniciar la sesion");
            }
        ?>
    </body>
</html>