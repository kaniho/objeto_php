<?php
require_once "vehiculo.php";

class coche extends vehiculo {

    public function __construct(
        string $marca,
        string $modelo,
        string $color,
        private int $numeroPuertas
    ) {
        //Modificar el constructor de las clases derivadas  para llamar al constructor de la clase base Vehículo.
        parent::__construct($marca, $modelo, $color);  
    }

    public function setNumeroPuertas(int $numeroPuertas) {
        $this->numeroPuertas = $numeroPuertas;
    }

    public function getNumeroPuertas() : int {
        return $this->numeroPuertas;
    }


    public function mover() {
        echo "El coche se esta moviendo.<br>";
    }

    public function detener() {
        echo "El coche se esta deteniendo.<br>";
    }

    public function obtenerInformacion(): string {
        return parent::obtenerInformacion() . ", Número de Puertas: {$this->numeroPuertas}";
    }  

}



?>