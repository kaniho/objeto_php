<?php

final class bicicleta extends vehiculo {
    public function __construct(
        string $marca,
        string $modelo,
        string $color = "Negro"

    ){
        parent::__construct($marca,$modelo,$color);
    }

    public function pedalear() {
        echo "La bicicleta está siendo pedaleada.<br>";
    }

    public function mover() {
        echo "La bicicleta se mueve al pedalear.<br>";
    }

    public function detener() {
        echo "La bicicleta se ha detenido.<br>";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion();
    }

}

?>