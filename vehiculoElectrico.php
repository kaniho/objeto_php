<?php
abstract class vehiculoElectrico {
    public function __construct(
        protected string $marca,
        protected string $modelo,
        protected string $color = "blanco"
    ) {}

    abstract public function cargarBateria();

    abstract public function estadoBateria();


}



?>