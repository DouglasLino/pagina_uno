<?php


if (isset($_POST['register'])){
    include("con_db.php");

    if (!empty($_POST['name'])  && !empty($_POST['email'])){
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $fechareg = date("d/m/y");

        $consulta = "INSERT INTO datos (nombre, email, fecha_reg) VALUES ('$name','$email','$fechareg')";
        $resultado = mysqli_query($conex,$consulta);
        
        
        if($resultado){
         ?>
            <script>
                alert("Te has inscrito correctamente!");
            </script>
            
         <?php
           
         
        }else{
         ?>
            <script>
                alert("Ups! ha fallado, itentalo nuevamente");
            </script>
         <?php
        }
    
    }else{
        ?>
           <script>
                 alert("¡Por favor completa todos los campos!");
           </script>
        <?php
    }
    header('Location: listado.php');
}




?>

