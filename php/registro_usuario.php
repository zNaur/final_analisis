<?php

    include 'conexion.php';
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['contrasena'];
    $cargo = $_POST['cargo'];
    

    $query = "INSERT INTO n_usuarios(username, email,contrasena, cargo) 
              VALUES('$username', '$email','$password','$cargo')";

    

    $verificar_email = mysqli_query($conexion, "SELECT * FROM n_usuarios WHERE email='$email' ");
    if(mysqli_num_rows($verificar_email) > 0){
        echo '
            <script>
                alert("El email Ya Se encuentre En Uso.");
                window.location = "../index.php";
            </script>
        
        ';
        exit();
    }
    
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