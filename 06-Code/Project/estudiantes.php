<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calificaciones - Estudiante</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="css/estilo_barra.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php include 'barra_navegacion.php'; ?>

    <header style="display: flex; align-items: center; padding: 10px;">
        <img src="img/imagen.jpg" alt="Logotipo" style="max-width: 5%; margin-right: 10px;">
        <h1>Bienvenido, Estudiante</h1>
    </header>
    <hr size="10" width="100%" noshade color="blue">

    <main>
        <section style="text-align: center;">
            <h2>Consulta tus Calificaciones</h2>
            <p>Visualiza tus calificaciones y el resumen de tu rendimiento académico.</p>

            <!-- Tabla de calificaciones -->
            <table border="1" style="margin: 0 auto; border-collapse: collapse; width: 80%;">
                <thead style="background-color: #2F0CEC; color: white;">
                    <tr>
                        <th>Materia</th>
                        <th>Tipo de Evaluación</th>
                        <th>Calificación</th>
                        <th>Promedio</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Ejemplo de filas -->
                    <tr>
                        <td>Matemáticas</td>
                        <td>Pruebas</td>
                        <td>8.5</td>
                        <td>8.0</td>
                    </tr>
                    <tr>
                        <td>Lengua</td>
                        <td>Tareas</td>
                        <td>9.0</td>
                        <td>8.8</td>
                    </tr>
                </tbody>
            </table>
        </section>
    </main>

    <footer style="text-align: center; padding: 10px; background-color: #f1f1f1; margin-top: 20px;">
        <p>Equipo de Soporte - Unidad Educativa Mahanaym</p>
        <p>&copy; 2024 Unidad Educativa Mahanaym</p>
    </footer>
</body>
</html>
