<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require("../conexion.php");
setlocale(LC_ALL,"es_ES");
$fecha = date("YmdHis");

    $user = mysqli_real_escape_string($con,(strip_tags($_POST["email"],ENT_QUOTES))); 
    $contra = mysqli_real_escape_string($con,(strip_tags($_POST["contrasena"],ENT_QUOTES)));
    
    $sql = "UPDATE `users` SET  `contrasena`=MD5('$contra') ";
					$sql.= "WHERE  email='$user'";

					$update = mysqli_query($con, $sql) or die(mysqli_error());
				if($update){
					header("Location: ../perfil.php?error=2");
				}else{
					header("Location: ../perfil.php?error=1");
				}
    
   
	
					
						


           

                 


?>