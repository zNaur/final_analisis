<?php

    include 'conexion.php';
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Obtener los registros de la tabla `emprendimientos`
    $sql = "SELECT * FROM emprendimientos";
    $result = $conn->query($sql);
    
    $data = array();
    
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }
    
    $conn->close();
    
    // Enviar los datos como JSON
    header('Content-Type: application/json');
    echo json_encode($data);
?>