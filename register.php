<!DOCTYPE html>
<html lang="es">
<head>
  <title>Registro de Usuario</title>
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


<div class="row mt-20 align-middle h-100">
     <div class="col-md-4 offset-md-4">
              <?php if($_GET["error"]){ ?>
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">×</span>
                       </button>
                       <strong>ERROR</strong> <?php if($_GET["error"]=="1"){echo "Error de Usuario o Contraseña";} else{echo"El correo ya esta registrado";} ?>
                </div>
			<?php } ?>		
</div>          
  <div class="col-md-4 offset-md-4 border rounded center-block">
     <div class="container-sm text-center mt-2 mb-2">
          <h4>Registro del Sistema</h4>      
     </div>
     <div class="card-box mb-0">
           <div class="m-t-10 p-20">
                <form class="m-t-20" action="elementos/registro.php" method="post" id="registroForm">
                <div class="form-group row">
                                <div class="col-12"><label>Nombre</label>
                                    <input class="form-control" type="text" required="" placeholder="nombre" id="nombre" name="nombre">
                                </div>
                       </div>
                      <div class="form-group row">
                                <div class="col-12"><label>Email</label>
                                    <input class="form-control" type="text" required="" placeholder="correo" id="correo" name="correo">
                                </div>
                       </div>
                       <div class="form-group row">
                                <div class="col-12"><label>Contraseña</label>
                                    <input class="form-control" type="password" required="" placeholder="Contraseña" id="contrasena" name="contrasena">
                                </div>
                        </div>
                        <div class="form-group row">
                                <div class="col-12"><label>Confirmar Contraseña</label>
                                    <input class="form-control" type="password" required="" placeholder="Contraseña" id="confirm_contrasena" name="confirm_contrasena">
                                </div>
                        </div>
                        <div class="form-group text-center row m-t-10">
                                <div class="col-12">
                                    <button class="btn btn-primary waves-effect waves-light" type="submit">Registrar</button>
                                </div>
                        </div>
                </form>
           </div>
        </div>
    </div>       
</div>

  


</body>
</html>
