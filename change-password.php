<!DOCTYPE html>
<html lang="es">
<head>
  <title>Perfil de Usuario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.validate.js"></script>
  <script src="js/validar.js"></script>
  <style>
    
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>
<?php 
     ///adjuntar elementos
     require("elementos/topbar.php");
?>

  <div class="col-md-4 offset-md-4 border rounded">
     <div class="container-sm text-center mt-2 mb-2">
          <h4>Cambiar Contraseña</h4>      
     </div>
     <div class="card-box mb-0">
           <div class="m-t-10 p-20">
                
           <form class="m-t-20" action="elementos/changepass.php" method="post" id="registroForm">
                      <div class="form-group row" hidden>
                                <div class="col-12"><label>Email</label>
                                    <input class="form-control" type="text" required="" placeholder="email" id="email" name="email" value="<?php echo $usuariouser?>" readonly hidden>
                                </div>
                       </div>
                       <div class="form-group row">
                                <div class="col-12"><label>Nueva Contraseña</label>
                                    <input class="form-control" type="password" required="" placeholder="Contraseña" id="contrasena" name="contrasena" required>
                                </div>
                        </div>
                        <div class="form-group row">
                                <div class="col-12"><label>Confirmar Nueva Contraseña</label>
                                    <input class="form-control" type="password" required="" placeholder="Contraseña" id="confirm_contrasena" name="confirm_contrasena" required>
                                </div>
                        </div>
                        <div class="form-group text-center row m-t-10">
                                <div class="col-12">
                                    <button class="btn btn-block btn-primary waves-effect waves-light" type="submit">Cambiar Contraseña</button>
                                </div>
                        </div>
                </form>
                        
           </div>
        </div>
    </div>       
</div>

  


</body>
</html>
