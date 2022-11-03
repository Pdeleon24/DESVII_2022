<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratorio 18</title>
</head>
<body>
<form action="Laboratorio18.php" method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre">
    <br></br>
    <label for="apellido">Apellido:</label>
    <input type="text" name="apellido" id="apellido" required>
 <br></br>
    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>
<br></br>
    <label for="contraseña">Password:</label>
    <input type="password" name="contraseña" id="contraseña">
<br></br>
    <label for="repetircontraseña">Repetir Contraseña:</label>
    <input type="password" name="RepetirContraseña" id="RepetirContraseña" required>
<br></br>
    <label for="ip">IP:</label>
    <input type="text" name="ip" id="ip" required>
<br></br>
    <input type="submit" value="Registrar">
  </form>
</body>
</html>