<?php
require_once "vehiculo.php";

class camion extends vehiculo {

    public function __construct(
        string $marca,
        string $modelo,
        string $color,
        private float $capacidad
    ) {
        parent::__construct($marca,$modelo,$color);
    }

    public function setCapacidad(int $capacidad) {
        $this->capacidad = $capacidad;
    }

    public function getCapacidad() : int {
        return $this->capacidad;
    }

    public function mover() {
        echo "El camion se esta moviendo.<br>";
    }

    public function detener() {
        echo "El camion se esta deteniendo.<br>";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Capacidad de Carga: {$this->capacidad}";
    }
 
}



?>