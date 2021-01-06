<!DOCTYPE html>
<html lang="es">
<head>
  <title>Registro de Usuario</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
 </head>
<body>

<!-- Alertas de validacion PHP  -->
<div class="row mt-20 align-middle h-100">
     <div class="col-md-4 offset-md-4">
              <?php if($_GET["error"]){ ?>
                 <div class="alert alert-success alert-dismissible fade show" role="alert">
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">×</span>
                       </button>
                       <strong>ERROR</strong> <?php if($_GET["error"]=="1"){echo "Error de Usuario o Contraseña";} else{echo"Usuario y/o Contaseña incorrecta";} ?>
                </div>
			<?php } ?>		
</div>          
<!-- fin Alertas de validacion PHP  -->
        <div class="col-md-4 offset-md-4 border rounded center-block">
          <div class="container-sm text-center mt-2 mb-2">
                <h4>Acceso al Sistema</h4>      
          </div>
          <div class="card-box mb-0">
                <div class="m-t-10 p-20">
                      <form class="m-t-20" action="elementos/login.php" method="post">
                            <div class="form-group row">
                                      <div class="col-12"><label>Email</label>
                                          <input class="form-control" type="text" required="" placeholder="email" id="email" name="email">
                                      </div>
                            </div>
                            <div class="form-group row">
                                      <div class="col-12"><label>Contraseña</label>
                                          <input class="form-control" type="password" required="" placeholder="Contraseña" id="contrasena" name="contrasena">
                                      </div>
                              </div>
                              <div class="form-group text-center row m-t-10">
                                      <div class="col-12">
                                          <button class="btn btn-primary waves-effect waves-light" type="submit">Acceso</button>
                                          <a class="btn btn-success waves-effect waves-light" href="register.php">Registro</a>
                                      </div>
                              </div>
                      </form>
                </div>
              </div>
          </div>       
      </div>
</body>
</html>
