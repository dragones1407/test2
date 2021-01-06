<?php
class Usuario
{       public $nombre;
        public $contrasena; 
        public function Usuarioporemail($email)
        {
         
            require("conexion.php");
            $sql = mysqli_query($con, "SELECT * FROM users WHERE email='$email' ORDER BY id ASC");
                    if(mysqli_num_rows($sql) == 0){
                        echo "no existe";
                        
                    }else{
                        $row = mysqli_fetch_assoc($sql);

                        $this->nombre=$row['nombre'];
                        $this->contrasena=$row['contrasena'];
                    
                            
                    }

        }

}


?>