<?php

   

    session_start();//Creo una sesion
    //Declaro las variables y almaceno lo que puso el usuario a traves del metodo POST
        $usuario = $_POST['usuario'];
        $contra= $_POST['contra'];
          
        $_SESSION['usuario'] = $usuario;

        //Valido quie las variables fueron creadas y que no sean nulas
        if (isset($_POST['usuario'])&& ($_POST['contra'])){
        
        
        
        
            //con este otro if valido al usuario y la contraseña
            if($usuario==$usuario && $contra=='1234')
            {
            
                header("location:http://localhost/parcial/carrito/index.html");

            }
            else
            {
                //Con este else redirijo para que vuelva a cargar y pida la contraseña nuevamente ya que es incorrecta
                header("location:http://localhost/parcial/index.html");
            }

        }else
        {
                header("location:http://localhost/parcial/index.html");
        }
    
    
        

    

?>