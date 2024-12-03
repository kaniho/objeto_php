<?php
require_once "vehiculo.php";

class moto extends vehiculo {
    
    public function __construct(
        string $marca,
        string $modelo,
        string $color,
        private int $cilindrada
    ) {
        parent::__construct($marca,$modelo,$color);
    }

    public function setCilindrada(int $cilindrada) {
        $this->cilindrada = $cilindrada;
    }

    public function getCilindrada() : int {
        return $this->cilindrada;
    }

    public function mover() {
        echo "La moto se esta moviendo.<br>";
    }

    public function detener() {
        echo "La moto se esta deteniendo.<br>";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Cilindrada: {$this->cilindrada}";
    }

}

?>