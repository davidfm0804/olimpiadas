<?php
class Minscripciones {
    private $conexion;

    public function __construct() {
        require_once '../config/configdb.php';
        $this->conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BBDD);
        $this->conexion->set_charset("utf8");

        if ($this->conexion->connect_error) {
            die("Conexión fallida: " . $this->conexion->connect_error);
        }
        // Activar modo de excepciones
        $this->conexion->report_mode = MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT;
    }   

    public function mMostrarAlumnos($clase) {
        $SQL = "SELECT * FROM alumnos WHERE CodClase='$clase'";
        return $this->conexion->query($SQL);
    }

    public function mMostrarPrueba($idPrueba) {
        $SQL = "SELECT * FROM pruebas WHERE idPrueba='$idPrueba'";
        return $this->conexion->query($SQL);
    }   

    public function mInsertarAlumnosPrueba($idAlumno1,$idPrueba1,$idAlumno2,$idPrueba2,$idAlumno3,$idPrueba3) {
        try {
        $SQL = "INSERT INTO inscripciones (idAlumnos,idPrueba) VALUES ($idAlumno1,$idPrueba1), ($idAlumno2,$idPrueba2), ($idAlumno3,$idPrueba3)";
        return $this->conexion->query($SQL);
        } catch (mysqli_sql_exception $e) {
            if ($e->getCode() === 1062) { 
                return "Csu";
            } else {
                return false;
            }
        }
        return true; 
    }
}
?>