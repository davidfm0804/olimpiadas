<?php
require_once('../controladores/Cinscripciones.php');

// Verificar si 'clase' está presente en el POST
if (isset($_POST['clase'])) {
    $clase = $_POST['clase'];
    
    // Crear objeto de inscripciones y obtener los resultados
    $objinscripciones = new Cinscripciones();
    $resultado = $objinscripciones->cMostrarAlumnos($clase);
    // Almacenar los alumnos en un array
    $alumnos = [];
    while ($fila = $resultado->fetch_assoc()) {
        $alumnos[] = $fila;
    }
} else {
    echo "No se seleccionó ninguna clase.";
    exit;
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elige clases</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Elige Que Alumno va en cada Prueba: </h1>
    <form action="Inscripciones.php" method="POST">
        <h2>Salto de longitud</h2>
        <select name="alumno1">
            <option value="" disabled selected>Seleccione un alumno</option>
            <?php
                foreach ($alumnos as $fila) {
                    echo "<option value=" . $fila['idAlumnos'] . ">" . $fila['nombre'] . "</option>";
                }
            ?>
        </select>
        <h2>Lanzamiento de jabalina</h2>
        <select name="alumno2">
            <option value="" disabled selected>Seleccione un alumno</option>
            <?php
                foreach ($alumnos as $fila) {
                    echo "<option value=" . $fila['idAlumnos'] . ">" . $fila['nombre'] . "</option>";
                }
            ?>
        </select>
        <h2>Carrera de 100 metros</h2>
        <select name="alumno3">
            <option value="" disabled selected>Seleccione un alumno</option>
            <?php
                foreach ($alumnos as $fila) {
                    echo "<option value=" . $fila['idAlumnos'] . ">" . $fila['nombre'] . "</option>";
                }
            ?>
        </select>
        <input type="submit" value="Enviar" />
    </form>

    <button><a href="index.php">Volver</a></button>
    <script src="../js/script.js"></script>
</body>
</html>