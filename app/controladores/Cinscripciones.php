<?php
class Cinscripciones {
    private $objinscripciones;

    public function __construct() {
        require_once '../modelos/Minscripciones.php';
        $this->objinscripciones = new Minscripciones();
    }

    public function cMostrarAlumnos($clase) {
        return $this->objinscripciones->mMostrarAlumnos($clase);
    }
    public function cInsertarAlumnosPrueba($idAlumno1,$idPrueba1,$idAlumno2,$idPrueba2,$idAlumno3,$idPrueba3){
        $resultado = $this->objinscripciones->mInsertarAlumnosPrueba($idAlumno1,$idPrueba1,$idAlumno2,$idPrueba2,$idAlumno3,$idPrueba3);
        if ($resultado === true) {
            return "Consulta Correcta";
        } elseif ($resultado === "Csu") {
            return "Clave Duplicada";
        } else {
            return "Error en el registro";
        }
    }
}
?>