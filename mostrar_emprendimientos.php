<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Emprendimientos</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h1>Lista de Emprendimientos</h1>
    <table id="emprendimientosTable">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Foto</th>
            </tr>
        </thead>
        <tbody>
            <!-- Los datos serán insertados aquí por JavaScript -->
        </tbody>
    </table>

    <script>
        // Función para cargar los datos de emprendimientos
        function loadEmprendimientos() {
            fetch('get_data.php')
                .then(response => response.json())
                .then(data => {
                    const tableBody = document.getElementById('emprendimientosTable').getElementsByTagName('tbody')[0];

                    data.forEach(row => {
                        const tr = document.createElement('tr');

                        tr.innerHTML = `
                            <td>${row.id}</td>
                            <td>${row.nombre}</td>
                            <td>${row.descripcion}</td>
                            <td>${row.telefono}</td>
                            <td>${row.correo}</td>
                            <td><img src="data:image/jpeg;base64,${btoa(row.foto)}" alt="Foto" style="width: 100px; height: auto;" /></td>
                        `;

                        tableBody.appendChild(tr);
                    });
                })
                .catch(error => console.error('Error al cargar los datos:', error));
        }

        // Cargar los datos al cargar la página
        window.onload = loadEmprendimientos;
    </script>
</body>
</html>
