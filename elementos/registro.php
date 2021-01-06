<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require("../conexion.php");
setlocale(LC_ALL,"es_ES");
$fecha = date("YmdHis");

    $user = mysqli_real_escape_string($con,(strip_tags($_POST["correo"],ENT_QUOTES))); 
    $contra = mysqli_real_escape_string($con,(strip_tags($_POST["contrasena"],ENT_QUOTES)));
    $nombre = mysqli_real_escape_string($con,(strip_tags($_POST["nombre"],ENT_QUOTES))); 
    
    
    $sql = mysqli_query($con, "SELECT * FROM users WHERE email='$user' ORDER BY id ASC");
			if(mysqli_num_rows($sql) == 0){

                $sql = "INSERT INTO `users`(`nombre`, `email`, `contrasena`, `fehchaalta`)
                         VALUES('$nombre', '$user', MD5('$contra') , '$fecha')";
                         echo $sql;
	                  $insert = mysqli_query($con, $sql) or die(mysqli_error());
						if($insert){
                            echo '<meta http-equiv="refresh" content="0; url=../perfil.php">';
                            $_SESSION["nombre"]=$nombre;
                            $_SESSION["usuario"]=$user;
						}else{
							echo 'error al insertar valor';
						}
                
			}else{
				$row = mysqli_fetch_assoc($sql);
				     
                    echo '<meta http-equiv="refresh" content="0; url=../register.php?error=2">';
					
			}
	
					
						


           

                 


?>