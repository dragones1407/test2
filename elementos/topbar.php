<?php
require('sesion.php');
require('funciones.php');
?>
<div class="topbar mb-5">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Bienvenido <b><?php echo $usuario;?></b></a>
  
    <div class="navbar-nav">
      <a class=" btn btn-primary mr-2 active" href="change-password.php">Cambiar Contraseña</a>
      <a class="btn btn-secondary  active" href="exit.php">Salir</a>
    </div>
</nav>


</div>