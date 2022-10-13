<?php
if(array_key_exists('enviar',$_POST)){
    $expire=time()+60*5;
    setcookie("user",$_REQUEST['visitante'], $expire);
    header("Refresh:0");
}
?>
<html LANG="es">
    <head>
        <title>Laboratorio 13</title>
        <link REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
    </head>
    <body>
        <hi>Creación de Cookies</hi>
        <h2>La coockie "User" tendra solo 5 minutos de duración</h2>
        <?php
        if(isset($_COOKIE["user"])){
            print("<BR/>Hola <B>".$_COOKIE["user"]."</B> gracias por visitar nuestro sitio web<BR/>");
        }
        else{
        ?>
        <form name="formcoockie" method="post" action="Laboratorio13.2.php">
        <BR/>Hola, primera vez que te vemos por nuestro sitio web¿Comó te llamas?
        <input type="text" name="visitante">
        <input name="envia" value="Gracias por identificarte" type="submit" /><BR/>
        <?php
        }
        ?>
        <BR/><A href="Laboratorio13.3.php">Continuar...</A>            
    </body>
</html>