<?php 

    $conn = new mysqli('localhost','id21111715_nono','M@yos2003','id21111715_noe');

    if(isset($_POST['registro'])){

        if(!empty(trim($_POST['password_usu'])) && !empty(trim($_POST['usuario_usu']))){
        $password_usu = $_POST['password_usu'];
        $usuario_usu = $_POST['usuario_usu'];

            $enc_password_usu = password_hash($password_usu, PASSWORD_DEFAULT);
            $conn->query("INSERT INTO usuarios(usuario_usu, password_usu) VALUES ('$usuario_usu','$password_usu')");

            if ($conn->affected_rows != 1){

                $registro_error = "Se produjo un error";

            }else{
                 $registro_success = "Su informacion fue registrada correctamen";
            }

        }  else 
             {
                $registro_error = "Se requiere llenar los contenidos";
             }
    }       
?>
