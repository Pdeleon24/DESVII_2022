<HTML LANG="es">
<HEAD>
    <TITLE>Laboratorio 10.1</TITLE>
    <LINK REL="stylesheet" TYPE="text/css" HREF="css/estilo.css">
</HEAD>
<BODY>
    <?php

    require_once("class/votos.php");

    if(array_key_exists('enviar', $_POST))
    {
        print ("<H1>Encuesta. Voto resgistrado</H1>\n");

        $obj_votos = new votos();
        $result_votos = $obj_votos->listar_votos();

        foreach ($result_votos as $result_voto) {
            $votos1=$result_voto['votos1'];
            $votos2=$result_voto['votos2'];
        }

        $voto = $_REQUEST['voto'];
        if ($voto == "si")
        $votos1 = $votos1 + 1;
        else if ($voto == "no")
        $votos2 = $votos2 + 1;

        $obj_votos = new votos();
        $result = $obj_votos->actualizar_votos($votos1, $votos2);

        if($result){
            print ("<P>Su voto ha sido registrado. Gracias por participar</P>\n");
            print ("<A HREF='Laboratorio10.2.php'>Ver resultados</A>\n");
        }

        else{
            print ("<A HREF='Laboratorio10.1.php'>Error al actualizar su voto</A>\n");
        }
    }

    else{

    ?>

    <H1>Encuesta</H1>

    <P>¿Cree ud, que el precio de la vivienda subiendo al ritmo actual?</P>
    <FORM ACTION="Laboratorio10.1.php" METHOD="POST">
        <INPUT TYPE="RADIO" NAME="voto" VALUE="si" CHECKED>Si<BR>
        <INPUT TYPE="RADIO" NAME="voto" VALUE="no" CHECKED>No<BR><BR>
        <INPUT TYPE="SUBMIT" NAME="enviar" VALUE="votar">
    </FORM>

    <A HREF="Laboratorio10.2.php">Ver resultados</A>
<?php
    }
?>
</BODY>
</HTML>