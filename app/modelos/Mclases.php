<?php
class Mclases {
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

    public function mMostrarClasesAlumnos() {
        $SQL = "SELECT DISTINCT CodClase FROM alumnos;";
        return $this->conexion->query($SQL);
    }
}
?>