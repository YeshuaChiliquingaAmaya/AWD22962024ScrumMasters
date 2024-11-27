<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reportes de Estudiantes</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="css/estilo_barra.css" rel="stylesheet" type="text/css">
</head>
<body>
    <?php include 'barra_navegacion.php'; ?>

    <header style="text-align: left; padding: 2px;">
        <img src="img/imagen.jpg" alt="Header Image" style="max-width: 4%; height: auto;">
    </header>

    <hr size="10" width="100%" noshade color="blue">
    <h1>Reporte por Estudiante</h1>
    <hr size="10" width="100%" noshade color="#2F0CEC">

    <form method="post" action="">
        <label for="student_id">Ingrese el ID o nombre del estudiante:</label>
        <input type="text" id="student_id" name="student_id" placeholder="Ej: 101 o Juan" required>
        <button type="submit">Generar Reporte</button>
    </form>

    <hr size="10" width="100%" noshade color="blue">

    <?php
    // Datos básicos de estudiantes
    $student1_id = "101";
    $student1_name = "Juan";
    $student1_grades = [
        "Tests" => 85,
        "Workshops" => 90,
        "Assignments" => 88,
        "Homework" => 95,
        "Exams" => 80
    ];

    $student2_id = "102";
    $student2_name = "Ana";
    $student2_grades = [
        "Tests" => 78,
        "Workshops" => 82,
        "Assignments" => 75,
        "Homework" => 88,
        "Exams" => 85
    ];

    // Verificar si se envió un ID o nombre
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['student_id'])) {
        $input = trim($_POST['student_id']);

        if ($input === $student1_id || strtolower($input) === strtolower($student1_name)) {
            echo "<h2>Reporte para: $student1_name (ID: $student1_id)</h2>";
            echo "<ul>";
            foreach ($student1_grades as $category => $grade) {
                echo "<li><strong>$category:</strong> $grade</li>";
            }
            echo "</ul>";
        } elseif ($input === $student2_id || strtolower($input) === strtolower($student2_name)) {
            echo "<h2>Reporte para: $student2_name (ID: $student2_id)</h2>";
            echo "<ul>";
            foreach ($student2_grades as $category => $grade) {
                echo "<li><strong>$category:</strong> $grade</li>";
            }
            echo "</ul>";
        } else {
            echo "<p><strong>No se encontró un estudiante con el ID o nombre ingresado.</strong></p>";
        }
    }
    ?>

    <hr size="10" width="100%" noshade color="blue">

    <p>Support Team</p>
    <?php include 'footer.php'; ?>
</body>
</html>
