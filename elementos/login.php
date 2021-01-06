<?php
session_start();
if($_POST["email"] and $_POST["contrasena"])
{
    require("../conexion.php");
    $user = mysqli_real_escape_string($con,(strip_tags($_POST["email"],ENT_QUOTES))); 
    $contra = mysqli_real_escape_string($con,(strip_tags($_POST["contrasena"],ENT_QUOTES)));
    $sql = mysqli_query($con, "SELECT * FROM users WHERE email='$user' AND contrasena=MD5('$contra') ORDER BY id ASC");
			if(mysqli_num_rows($sql) == 0){
                echo '<meta http-equiv="refresh" content="0; url=../index.php?error=2">';
			}else{
				$row = mysqli_fetch_assoc($sql);
				     $id=$row['id'];
				     $nombre=$row['nombre'];
		             $_SESSION["nombre"]=$nombre;
					$_SESSION["usuario"]=$user;
					echo '<meta http-equiv="refresh" content="0; url=../perfil.php">';
			}
}                 


?>