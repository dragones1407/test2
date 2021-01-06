<!DOCTYPE html>
<html lang="es">
<head>
  <title>Perfil de Usuario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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


     require_once("elementos/funciones.php");
  /// fin elementos
  $usuarionu = new Usuario();
  $usuarionu->Usuarioporemail($usuariouser);
?>
<div class="row mt-20 align-middle h-100">
     <div class="col-md-4 offset-md-4">
              <?php if($_GET["error"]){ ?>
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">×</span>
                       </button>
                       <strong>!!!</strong> <?php if($_GET["error"]=="1"){echo "Ocurrio un problema durante la actualización";} else{echo"Se actualizo la contraseña correctamente!!";} ?>
                </div>
			<?php } ?>		
</div> 
  <div class="col-md-4 offset-md-4 border rounded">
          
     <div class="container-sm text-center mt-2 mb-2">
          <h4>Perfil</h4>      
     </div>
     <div class="card-box mb-0">
           <div class="m-t-10 p-20">
                
                <div class="form-group row">
                                <div class="col-12"><label>Nombre</label>
                                    <input class="form-control" type="text" required="" placeholder="nombre" id="nombre" name="nombre" value="<?php echo $usuarionu->nombre?>" readonly>
                                </div>
                       </div>
                      <div class="form-group row">
                                <div class="col-12"><label>Email</label>
                                    <input class="form-control" type="text" required="" placeholder="email" id="email" name="email" value="<?php echo $usuariouser?>" readonly>
                                </div>
                       </div>
                       <div class="form-group row">
                                <div class="col-12"><label>Contraseña</label>
                                    <input class="form-control" type="password" required="" placeholder="Contraseña" id="contrasena" name="contrasena" value="<?php echo $usuarionu->contrasena?>" readonly>
                                </div>
                        </div>
                        
           </div>
        </div>
    </div>       
</div>

  


</body>
</html>
