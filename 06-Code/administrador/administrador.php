<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Añadir Usuarios</title>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="css/estilo_barra.css" rel="stylesheet" type="text/css">
    <link href="css/estilo_footer.css" rel="stylesheet" type="text/css">
    <script>
        function agregarUsuario() {
            const tipoUsuario = document.getElementById("tipo_usuario").value;
            const nombre = document.getElementById("nombre_usuario").value;
            const curso = document.getElementById("curso").value || "-";
            const materia = document.getElementById("materia").value || "-";
            const hijo = document.getElementById("hijo").value || "-";

            if (!nombre || !tipoUsuario) {
                alert("Por favor, completa todos los campos obligatorios.");
                return;
            }

            const tablaUsuarios = document.getElementById("tablaUsuarios");
            const fila = document.createElement("tr");

            fila.innerHTML = `
                <td>${nombre}</td>
                <td>${tipoUsuario}</td>
                <td>${curso}</td>
                <td>${materia}</td>
                <td>${hijo}</td>
            `;

            tablaUsuarios.querySelector("tbody").appendChild(fila);

            // Limpiar campos del formulario
            document.getElementById("nombre_usuario").value = "";
            document.getElementById("curso").value = "";
            document.getElementById("materia").value = "";
            document.getElementById("hijo").value = "";
            document.getElementById("tipo_usuario").value = "Profesor";
            actualizarOpciones();
        }

        function actualizarOpciones() {
            const tipoUsuario = document.getElementById("tipo_usuario").value;

            document.getElementById("curso_contenedor").style.display =
                tipoUsuario === "Profesor" || tipoUsuario === "Estudiante" ? "block" : "none";
            document.getElementById("materia_contenedor").style.display =
                tipoUsuario === "Profesor" ? "block" : "none";
            document.getElementById("hijo_contenedor").style.display =
                tipoUsuario === "Padre" ? "block" : "none";
        }
    </script>
</head>
<body>
    <?php include 'barra_navegacion.php'; ?>

    <header style="display: flex; align-items: center; padding: 10px;">
        <img src="img/imagen.jpg" alt="Logotipo" style="max-width: 5%; margin-right: 10px;">
        <h1>Añadir Usuarios</h1>
    </header>
    <hr size="10" width="100%" noshade color="blue">

    <main>
        <section style="text-align: center;">
            <h2>Formulario para Añadir Usuarios</h2>
            <form onsubmit="agregarUsuario(); return false;" style="margin: 20px;">
                <div style="margin-bottom: 10px;">
                    <label for="nombre_usuario"><strong>Nombre del Usuario:</strong></label>
                    <input type="text" id="nombre_usuario" placeholder="Nombre completo" required  pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+"  title="Solo se permiten letras y espacios.">
                </div>

                <div style="margin-bottom: 10px;">
                    <label for="tipo_usuario"><strong>Tipo de Usuario:</strong></label>
                    <select id="tipo_usuario" onchange="actualizarOpciones();" required>
                        <option value="Profesor">Profesor</option>
                        <option value="Estudiante">Estudiante</option>
                        <option value="Padre">Padre</option>
                    </select>
                </div>

                <div id="curso_contenedor" style="margin-bottom: 10px;">
                    <label for="curso"><strong>Curso:</strong></label>
                    <select id="curso">
                        <option value="Primero">Primero</option>
                        <option value="Segundo">Segundo</option>
                        <option value="Tercero">Tercero</option>
                    </select>
                </div>

                <div id="materia_contenedor" style="margin-bottom: 10px;">
                    <label for="materia"><strong>Materia:</strong></label>
                    <select id="materia">
                        <option value="Matemáticas">Matemáticas</option>
                        <option value="Lenguaje">Lenguaje</option>
                        <option value="Ciencias">Ciencias</option>
                    </select>
                </div>

                <div id="hijo_contenedor" style="margin-bottom: 10px; display: none;">
                    <label for="hijo"><strong>Hijo:</strong></label>
                    <input type="text" id="hijo" placeholder="Nombre del hijo">
                </div>

                <button type="submit" style="padding: 10px 20px; background-color: #2F0CEC; color: white; border: none; cursor: pointer;">
                    Añadir Usuario
                </button>
            </form>
        </section>

        <section style="text-align: center; margin-top: 20px;">
            <h2>Usuarios Registrados</h2>
            <table id="tablaUsuarios" border="1" style="margin: 0 auto; border-collapse: collapse; width: 80%;">
                <thead style="background-color: #2F0CEC; color: white;">
                    <tr>
                        <th>Nombre</th>
                        <th>Tipo de Usuario</th>
                        <th>Curso</th>
                        <th>Materia</th>
                        <th>Hijo</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Datos iniciales quemados -->
                    <tr>
                        <td>Juan Hurtado</td>
                        <td>Profesor</td>
                        <td>Primero</td>
                        <td>Matemáticas</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>María López</td>
                        <td>Estudiante</td>
                        <td>Segundo</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Pedro Sánchez</td>
                        <td>Padre</td>
                        <td>-</td>
                        <td>-</td>
                        <td>María López</td>
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
