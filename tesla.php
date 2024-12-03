<?php

require_once "coche.php";

interface VehiculoElectrico {
    public function cargarBateria(): void;
    public function estadoBateria(): string;
}

class Tesla extends Coche implements VehiculoElectrico {
    public function __construct(
        string $marca,
        string $modelo,
        string $color,
        int $numeroPuertas,
        private int $bateria = 100
    ) {
        parent::__construct($marca, $modelo, $color, $numeroPuertas);
    }

    public function cargarBateria(): void {
        $this->bateria = 100;
        echo "  La batería está completamente cargada.<br>";
    }

    public function estadoBateria(): string {
        return "Estado de batería: {$this->bateria}%";
    }

    public function mover() {
        echo "El Tesla se mueve silenciosamente.<br>";
    }

    
}


?>