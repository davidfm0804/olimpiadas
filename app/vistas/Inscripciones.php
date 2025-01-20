<?php
require_once('../controladores/Cinscripciones.php');

    if(isset($_POST['alumno1'])&& isset($_POST['alumno2'])&& isset($_POST['alumno3'])){
        $idAlumno1 = $_POST['alumno1'];
        $idAlumno2 = $_POST['alumno2'];
        $idAlumno3 = $_POST['alumno3'];

        $idPrueba1 = 1;
        $idPrueba2 = 2;
        $idPrueba3 = 3;

        $objinscripciones = new Cinscripciones();
        $resultado = $objinscripciones->cInsertarAlumnosPrueba($idAlumno1,$idPrueba1,$idAlumno2,$idPrueba2,$idAlumno3,$idPrueba3); 
        
        if ($resultado === "Consulta Correcta") {
            echo "Alumnos registrados correctamente.";
        } elseif ($resultado === "Clave Duplicada") {
            echo "CSU repetida";
        } else {
            echo "Error en el registro de los alumnos.";
        }
    }else{
        echo 'No se seleccionaron datos';
    }
?>
<a href='index.php'>
    <button>Volver a Clases</button>
</a>