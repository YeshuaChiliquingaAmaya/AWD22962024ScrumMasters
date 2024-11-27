<!DOCTYPE html>
<html lang="en">
<head>
    <title>Teacher Report</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="css/estilo_barra.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php include 'barra_navegacion.php'; ?>

    <header style="text-align: left; padding: 2px;">
        <img src="img/imagen.jpg" alt="Header Image" style="max-width: 4%; height: auto;">
    </header>

    <hr size="10" width="100%" noshade color="blue">
    <h1>Reporte de Profesores y Alumnos</h1>
    <hr size="10" width="100%" noshade color="#2F0CEC">

    <?php
    // Información fija de los cursos y profesores
    $curso1 = "Matemáticas";
    $profesor1 = "Juan Hurtado";
    $alumnos_curso1 = 25;
    $notas_subidas_curso1 = true;

    $curso2 = "Ciencias";
    $profesor2 = "Ana Pérez";
    $alumnos_curso2 = 30;
    $notas_subidas_curso2 = false;

    // Mostrar tabla con condicionales
    echo '<table border="1" style="width: 100%; text-align: center;">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Curso</th>';
    echo '<th>Profesor</th>';
    echo '<th>Número de Alumnos</th>';
    echo '<th>Notas Subidas</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Curso 1
    echo '<tr>';
    echo '<td>' . $curso1 . '</td>';
    echo '<td>' . $profesor1 . '</td>';
    echo '<td>' . $alumnos_curso1 . '</td>';
    if ($notas_subidas_curso1) {
        echo '<td>Sí</td>';
    } else {
        echo '<td>No</td>';
    }
    echo '</tr>';

    // Curso 2
    echo '<tr>';
    echo '<td>' . $curso2 . '</td>';
    echo '<td>' . $profesor2 . '</td>';
    echo '<td>' . $alumnos_curso2 . '</td>';
    if ($notas_subidas_curso2) {
        echo '<td>Sí</td>';
    } else {
        echo '<td>No</td>';
    }
    echo '</tr>';

    echo '</tbody>';
    echo '</table>';
    ?>

    <hr size="10" width="100%" noshade color="blue">

    <p>Support Team</p>
    <?php include 'footer.php'; ?>
</body>
</html>
