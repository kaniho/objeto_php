<?php
abstract class vehiculo {
   
    public function __construct(
        protected string $marca,
        protected string $modelo,
        protected string $color = "Negro"
    ) {}

    abstract public function mover();
    abstract public function detener();

    public function obtenerInformacion(): string {
        return "Marca: {$this->marca}, Modelo: {$this->modelo}, Color: {$this->color}";
    }


    public function __toString(): string {
        return $this->obtenerInformacion();
    }

    public function __get($name) {
        return $this->$name ?? "Propiedad no accesible o no definida.";
    }
}

?>