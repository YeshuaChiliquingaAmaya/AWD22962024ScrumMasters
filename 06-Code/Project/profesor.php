<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teacher</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="css/estilo_barra.css" rel="stylesheet" type="text/css">
</head>
<body>
This is a page for teachers to insert the grades of:&nbsp;This is a page for teachers:&nbsp;This is a page for teachers&nbsp;A pageThis is a page for teachers&nbsp;
    <?php include 'barra_navegacion.php'; ?>

    <header style="text-align: left; padding: 2px;">
        <img src="img/imagen.jpg" alt="Header Image" style="max-width: 4%; height: auto;">
    </header>

    <!-- Línea horizontal decorativa -->
    <hr size="10" width="100%" noshade color="blue">
    <hr size="10" width="100%" noshade color="#2F0CEC">
    <h1>PÁGINA PROFESORES</h1>

    <!-- Información del profesor -->
    <p><strong>Teacher Name:</strong> Juan Hurtado.</p>
    <hr size="10" width="100%" noshade color="#2F0CEC">

    <!-- Descripción -->
    <h1>Información</h1>
    <p>
         <strong>“Tests, workshops, assignments, homework, exams”</strong>
    </p>
    <pre>
This is decoration
    </pre>

    <hr size="10" width="100%" noshade color="blue">

    <!-- Tabla para registro de notas -->
    <h2 style="text-align: center;">Registro de Calificaciones</h2>
    <form action="" method="post" style="text-align: center;">
        <table border="1" align="center" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 80%; background-color: #eef;">
            <thead>
                <tr>
                    <th>Nombre del Estudiante</th>
                    <th>Tipo de Evaluación</th>
                    <th>Calificación</th>
                    <th>Comentarios</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><input type="text" name="nombre_estudiante[]" placeholder="Nombre completo" required  pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+"  title="Solo se permiten letras y espacios."></td>
                    <td>
                        <select name="tipo_evaluacion[]" required>
                            <option value="Examen">Examen</option>
                            <option value="Tarea">Tarea</option>
                            <option value="Lección">Lección</option>
                            <option value="Proyecto">Proyecto</option>
                        </select>
                    </td>
                    <td><input type="number" name="calificacion[]" placeholder="Nota" min="0" max="20" step="0.1" required></td>
                    <td><input type="text" name="comentarios[]" placeholder="Comentarios opcionales" required></td>
                </tr>
            </tbody>
        </table>
        <br>
        <input type="submit" value="Guardar Notas" style="padding: 10px 20px; background-color: #2F0CEC; color: white; border: none; cursor: pointer;">
    </form>

    <?php
    // Procesar los datos del formulario
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        echo "<h3 style='text-align: center;'>Notas Registradas:</h3>";
        echo "<table border='1' align='center' cellpadding='10' cellspacing='0' style='border-collapse: collapse; width: 80%; background-color: #eef;'>";
        echo "<thead>
                <tr>
                    <th>Nombre del Estudiante</th>
                    <th>Tipo de Evaluación</th>
                    <th>Calificación</th>
                    <th>Comentarios</th>
                </tr>
              </thead><tbody>";

        foreach ($_POST['nombre_estudiante'] as $index => $nombre) {
            $tipo = $_POST['tipo_evaluacion'][$index];
            $nota = $_POST['calificacion'][$index];
            $comentarios = $_POST['comentarios'][$index];
            echo "<tr>
                    <td>" . htmlspecialchars($nombre) . "</td>
                    <td>" . htmlspecialchars($tipo) . "</td>
                    <td>" . htmlspecialchars($nota) . "</td>
                    <td>" . htmlspecialchars($comentarios) . "</td>
                  </tr>";
        }

        echo "</tbody></table>";
    }
    ?>

    <hr size="10" width="100%" noshade color="blue">
    <p>Support Team</p>
    <?php include 'footer.php'; ?>
</body>
</html>
