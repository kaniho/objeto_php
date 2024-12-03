<?php
class Concesionario {
    public function mostrarVehiculo(vehiculo $vehiculo): void {
        echo $vehiculo->obtenerInformacion() . "<br>";
    }
}



?>