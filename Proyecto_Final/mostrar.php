<?php

    session_start();
    session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/guardar.css">
    <title>GRID</title>
</head>
<body>


    <header>


    </header>

    <center>

        <h1>USUARIO</h1>

        <table border="">
            <thead>
                <th>ID</th>
                <th>USUARIO</th>
                <th>PASSWORD</th>
            </thead>

            <?php
                include ("php/abre.php");
                $consulta = "SELECT * FROM usuarios";
                $resultado = $conexion->query($consulta);

                while($row = $resultado->fetch_assoc()){
            ?>
            <tr>
                <td><?php  echo $row['id']  ?></td>
                <td><?php  echo $row['usuario_usu']  ?></td>
                <td><?php  echo $row['password_usu']  ?></td>
                
            </tr>
            <?php
                }
                ?>
        </table>
    </center>
    
</body>
</html>