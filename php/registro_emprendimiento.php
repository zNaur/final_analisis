<?php

    include 'conexion.php';
    
    $nombre = $_POST['nombre'];
    $descripcion = $_POST['descripcion'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $foto = $_POST['foto'];
    
    

    $query = "INSERT INTO emprendimientos(nombre, descripcion,telefono, correo, foto) 
              VALUES('$nombre', '$descripcion','$telefono','$correo','$foto')";

    

    
    
    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo '
            <script>
                alert("Usuario Registrado Correctamente.");
                window.location = "../index.php";
            </script>
        
        ';
    }else{
        echo '
            <script>
                alert("Intentelo Nuevamente.");
                window.location = "../index.php";
            </script>
        
        ';

    }

    mysqli_close($conexion);
?>