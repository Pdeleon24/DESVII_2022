<?php
session_start();

if(isset($_REQUEST['usuario']) && isset($_REQUEST['clave']))
{
    $usuario = $_REQUEST['usuario'];
    $clave = $_REQUEST['clave'];

    $salt = substr ($usuario, 0, 2);
    $clave_crypt = crypt($clave, $salt);

    require_once("class/usuarios.php");

    $obj_usuarios = new usuarios();
    $usuario_validado = $obj_usuarios->validar_usuario($usuario,$clave_crypt);

    foreach ($usuario_validado as $array_resp) {
        foreach ($array_resp as $value){
            $nfilas=$value;
        }
    }
    if ($nfilas > 0){
        $usuario_valido = $usuario;
        $_SESSION["usuario_valido"] = $usuario_valido;
    }
}
?>
<!DOCTYPE html public "-//W3C/DTD HTML 4.0//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
    <title>Laboratorio 14- Login al sitio de Noticias</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <?php
    if (isset($_SESSION["usuario_valido"]))
    {
    ?>
    <hi>Gestion de noticias</hi>
    <HR>
    <UL>
        <LI><A href="Laboratorio14.2">Listar todas las noticias</A>
        <LI><A href="Laboratorio14.3">Listar noticias por partes</A>
        <LI><A href="Laboratorio14.4">Buscar noticias</A>
    </UL>
    <HR>
    <P>[ <A href='logout.php'>Desconectar</A>]</P>
    <?php
    }
    else if (isset($usuario))
    {
        print ("<BR><BR>\n");
        print ("<P ALING='CENTER'>Acceso no autorizado</P>\n");
        print ("<p ALING='CENTER'>[ <A HREF='login.php'>Conectar</A> ]</P>\n");
    }
    else
    {
        print("<BR><BR>\n");
        print("<P CLASS='parrafocentrado'>Esta zona tiene el acceso restringuido.<BR> " . 
        "Para entrar debe identificarse</P>\n");
        print("<FORM CLASS='entrada' NAME='login' ACTION='login.php' METHOD='POST>\n");
        print("<P><LABEL CLASS='etiqueta-entrada'>Usuario:</LABEL>\n");
        print("   <INPUT TYPE='TEXT' NAME='usuario' SIZE='15'></P>\n");
        print("<P><LABEL CLASS='etiqueta-entrada'>Clave:</LABEL>\n");
        print("   <INPUT TYPE='PASSWORD' NAME='clave' SIZE='15'></P>\n");
        print("<P><INPUT TYPE='submit' VALUE='entrar'></P>\n");
        print("</FORM>\n");

        print("<P CLASS='parrafoconcentrado'>NOTA: si no dispone de identificacion o tiene problemas " .
        "para entrar<BR>pongase en contacto con el " .
        "<A HREF='MAILTO:webmaster@localhost'>administrador</A> del sitio</P>\n");
    }
?>
</body>
</html>