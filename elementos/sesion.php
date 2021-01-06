<?php
session_start();
$usuario=$_SESSION["nombre"];
$usuariouser=$_SESSION["usuario"];
if(!$usuariouser)
{

    echo '<meta http-equiv="refresh" content="0; url=signin.php">';
    exit();
}


?>