<?php
    require_once('../controladores/Cclases.php');
    $objclases = new Cclases();
    $resultado = $objclases->cMostrarClasesAlumnos();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elige clases</title>
    <link rel="stylesheet" href="../css/estilo.css">
</head>
<body>
    <h1>Elige Clase: </h1>
    <form action="Alumnos.php" method="POST">
        <select name="clase">
        <option value="" disabled selected>Seleccione una clase</option>
            <?php
               while($fila = $resultado->fetch_assoc()){
                    echo "<option value='".$fila['CodClase']."'>
                        ".$fila['CodClase']."
                    </option>";
                }
            ?>
        </select>
        <input type="submit" value="Enviar" />
    </form>
</body>
</html>
