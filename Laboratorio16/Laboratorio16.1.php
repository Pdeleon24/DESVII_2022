<html lang="en">
<head>
    <title>Laboratorio 16.1</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
    <h1>Consulta de Servicio Web de Conversión de Temperatura</h1>
    <form name="FormConv" method="post" action="Laboratorio16.1.php">
        <BR/>
    Convertir desde <select name="temp">
        <option value="CtoF" selected>°C a °F
            <option value="FtoC">°F a °C
</select> el valor
<input type="number" name="valor" step="Any" required>
<input name="Convertir" value="Convertir" type="submit"/>
    </form>
    <?php
    $servicio="https://www.w3schools.com/xml/tempconvert.asmx?wsdl";
    $parametros=array();
    if(array_key_exists('Convertir', $_POST)){
        $valor=$_POST['valor'];
        $temp=$_POST['temp'];

        if($temp=="CtoF"){
            $parametros['Celcius']=$valor;
            $cliente = new SoapClient($servicio, $parametros);
            $resultObj = $cliente->CelciusToFahrenheit($parametros);
            $resultado = $resultObj->CelciusToFahrenheitResult;
        }
        else{
            $parametros['Fahrenheit']=$valor;
            $cliente = new SoapClient($servicio, $parametros);
            $resultObj = $cliente->CelciusToFahrenheit($parametros);
            $resultado = $resultObj->CelciusToFahrenheitResult;
        }
        print ("<BR>La temperatura $valor".substr($temp,0,1)." es igual a:
        $resultado".substr($temp,3,1));
    }
    ?>
</body>
</html>