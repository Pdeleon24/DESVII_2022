<?php
session_start();
?>
<html lang="es">
<head>
    <title>Laboratorio 14.3</title>
    <link rel="stylesheet" href="css/estilo.css" type="text/css">
</head>
<body>
    <h1 >Consulta de noticias</h1>
    <?php
            if (isset($_SESSION["usuario_valido"])){
             require_once("class/noticias.php");

             $obj_noticia = new noticia();
             $noticias = $obj_noticia->consultar_noticias();
 
             $nfilas=count($noticias);
 
             if($nfilas > 0) {
                 print ("<TABLE>\n");
                 print ("<TR>\n");
                 print ("<TH>Titulo</TH>\n");
                 print ("<TH>Texto</TH>\n");
                 print ("<TH>Categoria</TH>\n");
                 print ("<TH>Fecha</TH>\n");
                 print ("<TH>Imagen</TH>\n");
                 print ("</TR>\n");
 
                 foreach($noticias as $resultado) {
                     print ("<TR>\n");
                     print ("<TD>". $resultado['titulo'] ."</TD>\n");
                     print ("<TD>". $resultado['texto'] ."</TD>\n");
                     print ("<TD>". $resultado['categoria'] ."</TD>\n");
                     print ("<TD>". date("j/n/Y",strtotime($resultado['fecha'])) ."</TD>\n");
 
                     if ($resultado['imagen']!="") {
                         print("<TD><A TARGET='_blank' HREF='img/" . $resultado['imagen'] . "'><IMG BORDER='0' SRC='img/iconotexto.gif'></A></TD>\n");
                     } else {
                         print ("<TD>&nbsp;</TD>\n");
                     }
                     print ("</TR>\n");
                 }
                 print ("</TABLE>\n");
             } else {
                 print ("No hay noticias disponibles");
             }
             ?>
             <P>[ <A href='login.php'>Menu principal</A>]</P>
             <?php
             }
             else{
                print("<BR><BR>\n");
                print("<P ALING='CENTER'>Acceso no autorizado</P>\n");
                print("<P ALING='CENTER'>[ <A HREF='login.php' TARGET='_top'>Conectar</A> ]</P>\n");
             }
         ?>
     </body>
 </html>