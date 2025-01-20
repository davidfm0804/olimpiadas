<?php
class Cclases {
    private $objclases;

    public function __construct() {
        require_once '../modelos/Mclases.php';
        $this->objclases = new Mclases();
    }

    public function cMostrarClasesAlumnos() {
        return $this->objclases->mMostrarClasesAlumnos();
    }
}
?>