<?php require 'controlador.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/guardar.css">
    <title>HASH</title>
</head>
<body>

    <h1>Password con Hash</h1>

    <form action="controlador.php" method="post" autocomplegte="off">

        <label for="">Usuario</label>
        <input type="text" name="nombre_usu">

        <label for="">Password</label>
        <input type="contrasena_usu" name="contrasena_usu">

        <button type="submit" name="registro">Registrar</button>

    </form>
    
</body>
</html>