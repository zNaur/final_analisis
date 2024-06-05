<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Datos</title>
    <link rel="stylesheet" href="css/creacion_emprendimiento.css">
</head>
<body>
    <h1>Montar Producto</h1>
    <form id="dataForm" accion="creacio_emprendimiento.php" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre del emprendimiento:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="nombre">Nombre completo del emprendedor:</label>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="descripcion">Descripción:</label>
        <textarea id="descripcion" name="descripcion" required></textarea><br><br>
        
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required><br><br>
        
        <label for="correo">Correo:</label>
        <input type="email" id="correo" name="correo" required><br><br>
        
        <label for="foto">Foto:</label>
        <input type="file" id="foto" name="foto" accept="image/*" required><br><br>
        
        <button type="button" onclick="submitData()">Enviar</button>
    </form>

    <script>
        function submitData() {
            const form = document.getElementById('dataForm');
            const formData = new FormData(form);

            fetch('insert.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert(data);
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
    </script>
</body>
</html>
